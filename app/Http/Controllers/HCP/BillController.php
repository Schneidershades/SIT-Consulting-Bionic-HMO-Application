<?php

namespace App\Http\Controllers\HCP;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Enrollee;
use App\Models\Hcp;
use App\Models\Tariff;
use App\Models\Drug;
use App\Models\Rate;
use App\Models\Capitation;
use App\Models\Hmo;
use App\Models\DiseaseClass;
use App\Models\Agreement;
use Session;

class BillController extends Controller
{
    public function index()
    {
        return view('dashboard.hcp.bills.index')
                ->with('bills', Bill::where('hcp_id', auth()->user()->userable->id)->get()); 
    }


    public function start()
    {
        $enrollees = Enrollee::where('hcp_id', auth()->user()->userable->id)->get();
        $diseases = DiseaseClass::all();
        return view('dashboard.hcp.bills.start')
                ->with('diseases', $diseases)
                ->with('enrollees', $enrollees);
    }

    public function storeEnrollee(Request $request)
    {
        // dd($request->all());
        if($request->enrollee_id){
            $checkEnrollee = Enrollee::where('id', $request->enrollee_id)->first();
        }

        if($checkEnrollee != null){
            $checkHmo = Hmo::where('id', $checkEnrollee->hmo_id)->first();
            
        }

        // $checkEncounterAlerts = Bill::where('enrollee', $request->enrollee_id)->get();

        if($checkHmo == null){
            return redirect()->back();
        }
        
        $bill = new Bill;

        $bill->enrollee_id = $checkEnrollee->id;
        $bill->hmo_id = $checkEnrollee->hmo_id;
        $bill->hmo_id = auth()->user()->userable->id;
        $bill->date_of_bill =  $request->date;
        // $bill->treatment = $request->treatment;
        $bill->description = $request->description;
        $bill->payment_reference = $request->payment_reference;
        $bill->amount_paid = $request->amount_paid;
        $bill->save();

        return redirect()->route('hcp-enrollee-bills.continue', $bill->identifier);
    }

    public function continueBill($identifier)
    {
        $bill = Bill::where('identifier', $identifier)->where('finished', false)->first();
        // dd($bill);

        if($bill == null){
            return redirect()->back();
        }

        $hmo = Hmo::where('id', $bill->hmo_id)->first();

        // dd($hmo);
        $drugAgreements = Agreement::where('hmo_id', $hmo->id)->where('hcp_id', auth()->user()->userable->id)->where('agreementable_type', 'drug')->get();
        $tariffAgreements = Agreement::where('hmo_id', $hmo->id)->where('hcp_id', auth()->user()->userable->id)->where('agreementable_type', 'tariff')->get();


        return view('dashboard.hmo.bills.continue')
                ->with('bill', $bill)
                ->with('drugAgreements', $drugAgreements)
                ->with('tariffAgreements', $tariffAgreements);
    }


    public function continueBillStore(Request $request, $identifier)
    {
        $bill = Bill::where('identifier', $identifier)->first();

        $checkService = Agreement::whereIn('agreementable_id', $request->hcp_service_details)
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', auth()->user()->userable->id)->with('agreementable')->get();
        $checkdrugs = Agreement::whereIn('agreementable_id', $request->hcp_drug_details)
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', auth()->user()->userable->id)->with('agreementable')->get();

        $bill->amount_paid = $request->amount_paid;
        $bill->amount_charged = $request->amount_charged;
        // $bill->hcp_deduction = $request->amount_deducted;
        // $bill->service_deduction = $service_deduction;
        // $bill->drug_deduction = $drug_deduction;
        // $bill->final_payment = $payment_to_hcp;
        // $bill->payment_method = $request->payment_method;
        // $bill->payment_reference = $request->payment_reference;
        $bill->service_break_down = json_encode($checkService);
        $bill->drug_break_down = json_encode($checkdrugs);
        $bill->save();

        // save to the transaction as regards to count drug and service activities
        if($request->hcp_service_details){
            $serviceDetails = array_flatten($request->hcp_service_details);
            $tariffId = Tariff::whereIn('id', $serviceDetails)->pluck('id')->toArray();

            $authorization = Agreement::whereIn('agreementable_id', $tariffId)
                                ->where('service_type', 'phs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->get();
            $preAuthorization = Agreement::whereIn('agreementable_id', $tariffId)
                            ->where('service_type', 'shs')
                            ->orWhere('service_type', 'ths')
                            ->where('hmo_id', $bill->hmo_id)
                            ->where('agreementable_type', 'tariff')
                            ->where('hcp_id', auth()->user()->userable->id)->get();
            
            if($authorization != null){
           
                foreach ($authorization as $authorize) {
                    $claimServiceAuthorization = Claim::where('claimable_id', $authorize->agreementable->id)
                                ->where('claimable_type', 'tariff')
                                ->where('service_type', 'phs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->where('enrollee_id', $bill->enrollee_id)
                                ->where('bill_id', $bill->id)
                                ->first();
                    if($claimServiceAuthorization == null){
                        $service = new Claim;
                        $service->identifier = mt_rand(100000, 9833322);
                        $service->enrollee_id = $bill->enrollee_id;
                        $service->hmo_id = $bill->hmo_id;
                        $service->hcp_id = auth()->user()->userable->id;
                        $service->bill_id = $bill->id;
                        $service->pre_authorization = false;
                        $service->status = 'verified';
                        $service->operator_user_id = auth()->user()->id;
                        $service->service_type = $authorize->service_type;
                        $service->amount = $authorize->amount;
                        $authorize->agreementable->serviceItems()->save($service);
                    }else{
                        $claimServiceAuthorization->operator_user_id = auth()->user()->id;
                        $claimServiceAuthorization->service_type = $authorize->service_type;
                        $claimServiceAuthorization->amount = $authorize->amount;
                        $claimServiceAuthorization->save();
                    }
                }
            }

            if($preAuthorization != null){
                foreach ($preAuthorization as $preAuthorize) {
                    $claimServicePreAuthorization = Claim::where('claimable_id', $preAuthorize->agreementable->id)
                                ->where('service_type', 'phs')
                                ->orWhere('service_type', 'shs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('claimable_type', 'tariff')
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->where('enrollee_id', $bill->enrollee_id)
                                ->where('bill_id', $bill->id)
                                ->first();
                    if($claimServicePreAuthorization == null){
                        $service = new Claim;
                        $service->enrollee_id = $bill->enrollee_id;
                        $service->hmo_id = auth()->user()->userable->id;
                        $service->hcp_id = $bill->hmo_id;
                        $service->bill_id = $bill->id;
                        $service->pre_authorization = true;
                        $service->status = 'pending';
                        $service->operator_user_id = auth()->user()->id;
                        $service->service_type = $preAuthorize->service_type;
                        $service->amount = $preAuthorize->amount;
                        $preAuthorize->agreementable->serviceItems()->save($service);
                    }else{
                        $claimServicePreAuthorization->operator_user_id = auth()->user()->id;
                        $claimServicePreAuthorization->service_type = $authorize->service_type;
                        $claimServicePreAuthorization->amount = $authorize->amount;
                        $claimServicePreAuthorization->save();
                    }
                }  
            }
        }

        $drug = new Claim;
        if($request->hcp_drug_details){
            $drugDetails = array_flatten($request->hcp_drug_details);
            $drugId = Drug::whereIn('id', $drugDetails)->pluck('id')->toArray();
            $drugAuthorization = Agreement::whereIn('agreementable_id', $drugId)
                                ->where('service_type', 'phs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->get();
            $drugPreAuthorization = Agreement::whereIn('agreementable_id', $drugId)
                            ->where('service_type', 'shs')
                            ->orWhere('service_type', 'ths')
                            ->where('hmo_id', auth()->user()->userable->id)
                            ->where('agreementable_type', 'drug')
                            ->where('hcp_id', $bill->hmo_id)->get();
            if($drugAuthorization != null){
                foreach ($drugAuthorization as $drugAuthorize) {
                    $claimDrugAuthorization = Claim::where('claimable_id', $drugAuthorize->agreementable->id)
                                ->where('claimable_type', 'drug')
                                ->where('service_type', 'phs')
                                ->where('enrollee_id', $bill->enrollee_id)
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->where('bill_id', $bill->id)
                                ->first();
                    if($claimDrugAuthorization == null){
                        $drug = new Claim;
                        $drug->enrollee_id = $bill->enrollee_id;
                        $drug->hmo_id = $bill->hmo_id;
                        $drug->hcp_id = auth()->user()->userable->id;
                        $drug->bill_id = $bill->id;
                        $drug->pre_authorization = false;
                        $drug->status = 'verified';
                        $drug->operator_user_id = auth()->user()->id;
                        $drug->service_type = $drugAuthorize->service_type;
                        $drug->amount = $drugAuthorize->amount;
                        $drugAuthorize->agreementable->drugItems()->save($drug);
                    }else{
                        $claimDrugAuthorization->operator_user_id = auth()->user()->id;
                        $claimDrugAuthorization->service_type = $authorize->service_type;
                        $claimDrugAuthorization->amount = $authorize->amount;
                        $claimDrugAuthorization->save();
                    }
                }
            }
            
            if($drugPreAuthorization != null){
                foreach ($drugPreAuthorization as $drugPreAuthorize) {
                    $claimDrugPreAuthorization = Claim::where('claimable_id', $drugPreAuthorize->agreementable->id)
                                ->where('service_type', 'phs')
                                ->where('service_type', 'shs')
                                ->where('enrollee_id', $bill->enrollee_id)
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('claimable_type', 'drug')
                                ->where('hcp_id', auth()->user()->userable->id)
                                ->where('bill_id', $bill->id)
                                ->first();
                    if($claimDrugPreAuthorization == null){
                        $drug = new Claim;
                        $drug->enrollee_id = $bill->enrollee_id;
                        $drug->hmo_id = $bill->hmo_id;
                        $drug->hcp_id = auth()->user()->userable->id;
                        $drug->bill_id = $bill->id;
                        $drug->pre_authorization = true;
                        $drug->status = 'pending';
                        $drug->operator_user_id = auth()->user()->id;
                        $drug->service_type = $drugPreAuthorize->service_type;
                        $drug->amount = $drugPreAuthorize->amount;
                        $drugPreAuthorize->agreementable->drugItems()->save($drug);
                    }else{
                        $claimDrugPreAuthorization->operator_user_id = auth()->user()->id;
                        $claimDrugPreAuthorization->service_type = $authorize->service_type;
                        $claimDrugPreAuthorization->amount = $authorize->amount;
                        $claimDrugPreAuthorization->save();
                    }
                }
            }
        }

        // encounter alerts 
        
        // $alert = Bill::where('user_id', $bill->enrollee_id)->where('hmo_id', $bill->hmo_id)->get();

        // if($alert->count() > 4){

        // }

        // dd('ho');
        
        Session::flash('success', 'The bill was sucessfully saved');
        return redirect()->route('hcp-enrollee-bills.show', $bill->identifier);
    }

    public function show($id)
    {
        $bill = Bill::where('identifier', $id)->first();
        return view('dashboard.hcp.bills.show')->with('bill', $bill);
    }

    public function externalBillCreate()
    {
        $tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
        $drugs = Drug::where('amount', '!=', 0)->get();
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        $hmos = Hmo::all();
        return view('dashboard.hcp.bills.externalbill')
                ->with('tariffs', $tariffs)
                ->with('drugs', $drugs)
                ->with('hmos', $hmos)
                ->with('enrollees', $enrollees);
    }

    public function hcpSignBill($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId)
    {
        $item = $FunctionHelpers::signAnything($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId);
        Session::flash($item['status'], $item['message']);
        return redirect()->back();
    }
}
