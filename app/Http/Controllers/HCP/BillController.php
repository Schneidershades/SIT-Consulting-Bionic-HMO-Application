<?php

namespace App\Http\Controllers\HCP;

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
        $bill->hcp_id = auth()->user()->userable->id;
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
        $service = new Claim;
        if($request->hcp_drug_details){
            foreach($request->hcp_service_details as $bill_detail){
                // dd($bill_detail);                         
                $tariff = Tariff::where('id', $bill_detail['treatment_id'])->first();

                $authorization = Agreement::where('agreementable_id', $tariff->id)
                                ->where('service_type', 'phs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', auth()->user()->userable->id)->first();
                    
                $preAuthorization = Agreement::where('agreementable_id', $tariff->id)
                                ->where('service_type', 'shs')
                                ->orWhere('service_type', 'ths')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', auth()->user()->userable->id)->first();


                if($authorization != null){
                    $service->identifier = mt_rand(100000, 9833322);
                    $service->enrollee_id = $bill->enrollee_id;
                    $service->hmo_id = $bill->hmo_id;
                    $service->hcp_id = auth()->user()->userable->id;
                    $service->bill_id = $bill->id;
                    $service->pre_authorization = false;
                    $service->status = 'verified';
                    $service->service_type = $authorization->service_type;
                    $service->amount = $authorization->amount;
                    $tariff->serviceItems()->save($service);
                }

                if($preAuthorization != null){
                    $service->identifier = mt_rand(100000, 9833322);
                    $service->enrollee_id = $bill->enrollee_id;
                    $service->hmo_id = $bill->hmo_id;
                    $service->hcp_id = auth()->user()->userable->id;
                    $service->bill_id = $bill->id;
                    $service->pre_authorization = true;
                    $service->status = 'pending';
                    $service->service_type = $authorization->service_type;
                    $service->amount = $preAuthorization->amount;
                    $tariff->serviceItems()->save($service);
                }
            }
        }

        $drug = new Claim;
        if($request->hcp_drug_details){
            foreach($request->hcp_drug_details as $drug_detail){
                $drugCheck = Drug::where('id', $drug_detail['drug_id'])->first();

                $drugAuthorization = Agreement::where('agreementable_id', $drugCheck->id)
                                ->where('service_type', 'phs')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', auth()->user()->userable->id)->first();

                $drugPreAuthorization = Agreement::where('agreementable_id', $drugCheck->id)
                                ->where('service_type', 'shs')
                                ->orWhere('service_type', 'ths')
                                ->where('hmo_id', $bill->hmo_id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', auth()->user()->userable->id)->first();

                if($drugAuthorization != null){
                    $drug->identifier = mt_rand(100000, 9833322);
                    $drug->enrollee_id = $bill->enrollee_id;
                    $drug->hmo_id = $bill->hmo_id;
                    $drug->hcp_id = auth()->user()->userable->id;
                    $drug->bill_id = $bill->id;
                    $drug->pre_authorization = false;
                    $drug->status = 'verified';
                    $drug->service_type = $authorization->service_type;
                    $drug->amount = $authorization->amount;
                    $drugCheck->drugItems()->save($drug);
                }

                if($drugPreAuthorization != null){
                    $drug->identifier = mt_rand(100000, 9833322);
                    $drug->enrollee_id = $bill->enrollee_id;
                    $drug->hmo_id = $bill->hcp_id;
                    $drug->hcp_id = auth()->user()->userable->id;
                    $drug->bill_id = $bill->id;
                    $drug->pre_authorization = true;
                    $drug->status = 'pending';
                    $drug->service_type = $authorization->service_type;
                    $drug->amount = $drugPreAuthorization->amount;
                    $drugCheck->drugItems()->save($drug);
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
}
