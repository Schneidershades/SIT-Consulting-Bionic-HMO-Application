<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Agreement;
use App\Models\Enrollee;
use App\Models\Tariff;
use App\Models\Capitation;
use App\Models\Rate;
use App\Models\Drug;
use App\Models\HmoHcp;
use App\Models\Hcp;
use App\Models\Claim;
use App\Models\DiseaseClass;
use App\Models\AuthorizationSignature;
use Session;


class BillController extends Controller
{
    public function index()
    {
        $bills =  Bill::where('hmo_id', auth()->user()->userable->id)->where('hcp_signature_staus', 'verified')->get();
        return view('dashboard.hmo.bills.index')
                ->with('bills', $bills);
    }

    public function start()
    {
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        $diseases = DiseaseClass::where('parent_id', '!=' , NULL)->get();
        return view('dashboard.hmo.bills.start')
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
            $checkHcp = Hcp::where('id', $checkEnrollee->hcp_id)->first();
            
        }

        // $checkEncounterAlerts = Bill::where('enrollee', $request->enrollee_id)->get();

        if($checkHcp == null){
            return redirect()->back();
        }
        
        $bill = new Bill;

        $bill->enrollee_id = $checkEnrollee->id;
        $bill->hmo_id = auth()->user()->userable->id;
        $bill->hcp_id = $checkEnrollee->hcp_id;
        $bill->date_of_bill =  $request->date;
        // $bill->treatment = $request->treatment;
        $bill->description = $request->description;
        $bill->payment_reference = $request->payment_reference;
        $bill->amount_paid = $request->amount_paid;
        $bill->save();

        return redirect()->route('bills.continue', $bill->identifier);
    }

    public function continueBill($identifier)
    {
        $bill = Bill::where('identifier', $identifier)->where('finished', false)->first();

        if($bill == null){
            return redirect()->back();
        }

        $hcp = Hcp::where('id', $bill->hcp_id)->first();
        $drugAgreements = Agreement::where('hcp_id', $hcp->id)->where('hmo_id', auth()->user()->userable->id)->where('agreementable_type', 'drug')->get();
        $tariffAgreements = Agreement::where('hcp_id', $hcp->id)->where('hmo_id', auth()->user()->userable->id)->where('agreementable_type', 'tariff')->get();


        return view('dashboard.hmo.bills.continue')
                ->with('bill', $bill)
                ->with('drugAgreements', $drugAgreements)
                ->with('tariffAgreements', $tariffAgreements);
    }


    public function continueBillStore(Request $request, $identifier)
    {
        $bill = Bill::where('identifier', $identifier)->first();

        $checkService = Agreement::whereIn('agreementable_id', $request->hcp_service_details)
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', $bill->hcp_id)->with('agreementable')->get();
        $checkdrugs = Agreement::whereIn('agreementable_id', $request->hcp_drug_details)
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', $bill->hcp_id)->with('agreementable')->get();

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
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', $bill->hcp_id)->first();
                    
                $preAuthorization = Agreement::where('agreementable_id', $tariff->id)
                                ->where('service_type', 'shs')
                                ->orWhere('service_type', 'ths')
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'tariff')
                                ->where('hcp_id', $bill->hcp_id)->first();


                if($authorization != null){
                    $service->identifier = mt_rand(100000, 9833322);
                    $service->enrollee_id = $bill->enrollee_id;
                    $service->hmo_id = auth()->user()->userable->id;
                    $service->hcp_id = $bill->hcp_id;
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
                    $service->hmo_id = auth()->user()->userable->id;
                    $service->hcp_id = $bill->hcp_id;
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
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', $bill->hcp_id)->first();

                $drugPreAuthorization = Agreement::where('agreementable_id', $drugCheck->id)
                                ->where('service_type', 'shs')
                                ->orWhere('service_type', 'ths')
                                ->where('hmo_id', auth()->user()->userable->id)
                                ->where('agreementable_type', 'drug')
                                ->where('hcp_id', $bill->hcp_id)->first();

                if($drugAuthorization != null){
                    $drug->identifier = mt_rand(100000, 9833322);
                    $drug->enrollee_id = $bill->enrollee_id;
                    $drug->hmo_id = auth()->user()->userable->id;
                    $drug->hcp_id = $bill->hcp_id;
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
                    $drug->hmo_id = auth()->user()->userable->id;
                    $drug->hcp_id = $bill->hcp_id;
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
        return redirect()->route('bills.show', $bill->identifier);
    }

    public function create()
    {
        $tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
        $drugs = Drug::where('amount', '!=', 0)->get();
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.bills.create')
                ->with('tariffs', $tariffs)
                ->with('drugs', $drugs)
                ->with('hcps', $hcps)
                ->with('enrollees', $enrollees);
    }


    public function store(Request $request)
    {
        
        dd($request->all());
        if($request->enrollee_id){
            $checkEnrollee = Enrollee::where('id', $request->enrollee_id)->first();
        }

        if($request->hcp_id){
            $checkHcp = Hcp::where('id', $request->hcp_id)->first();
        }

        $agreement = Agreement::whereIn('id', $request->hcp_service_details)->whereIn()->get();

        // $checkService = Tariff::whereIn('id', $request->hcp_service_details)->get();
        // $checkdrugs = Drug::whereIn('id', $request->hcp_drug_details)->get();
        // $service_deduction = Tariff::whereIn('id', $request->hcp_service_details)->sum('amount');
        // $drug_deduction = Drug::whereIn('id', $request->hcp_drug_details)->sum('amount');
 
        $payment_to_hcp = $service_deduction + $drug_deduction;

        $final_payment_to_hcp = $request->amount_charged - $payment_to_hcp;

        // dd($final_payment);
        $bill = new Bill;
        $bill->enrollee_id = $checkEnrollee->id;
        $bill->hmo_id = auth()->user()->userable->id;
        $bill->hcp_id = $checkEnrollee->hcp_id;
        $bill->date_of_bill =  $request->date;
        $bill->treatment = $request->treatment;
        $bill->description = $request->description;
        $bill->amount_paid = $request->amount_paid;
        $bill->amount_charged = $request->amount_charged;
        $bill->hcp_deduction = $request->amount_deducted;
        $bill->service_deduction = $service_deduction;
        $bill->drug_deduction = $drug_deduction;
        $bill->final_payment = $payment_to_hcp;
        $bill->payment_method = $request->payment_method;
        $bill->payment_reference = $request->payment_reference;
        $bill->service_break_down = json_encode($checkService);
        $bill->drug_break_down = json_encode($checkdrugs);
        $bill->save();

        // save to the transaction as regards to count drug and service activities
        $service = new Claim;
        if($request->hcp_drug_details){
            foreach($request->hcp_service_details as $bill_detail){
                $find_service = Tariff::where('id', $bill_detail['treatment_id'])->first();
                if($find_service != null){
                    $service->enrollee_id = $checkEnrollee->id;
                    $service->hmo_id = auth()->user()->userable->id;
                    $service->hcp_id = $checkEnrollee->hcp_id;;
                    $service->period = $request->date;
                    $find_service->serviceItems()->save($service);
                }
            }
        }

        $drug = new Claim;
        if($request->hcp_drug_details){
            foreach($request->hcp_drug_details as $drug_detail){
                $find_drug = Tariff::where('id', $drug_detail['drug_id'])->first();
                if($find_drug != null){
                    $drug->enrollee_id = $checkEnrollee->id;
                    $drug->hmo_id = auth()->user()->userable->id;
                    $drug->hcp_id = $checkEnrollee->hcp_id;;
                    $drug->period = $request->date;
                    $find_drug->serviceItems()->save($drug);
                }
            }
        }

        // $time = strtotime($bill->date_of_bill);
        // setup capitation
        // $findRate = Rate::where('name', 'capitation')->first();

        // $checkCapitation = Capitation::where('hcp_id', $checkEnrollee->hcp_id)
        //             ->where('hmo_id', auth()->user()->userable->id)
        //             ->whereMonth('period', date("F",$time))
        //             ->whereYear('period', date("Y",$time))->first();

        // if($checkCapitation == null){
        //     $newCapitation = new Capitation;
        //     $newCapitation->hcp_id = $checkEnrollee->hcp_id;
        //     $newCapitation->hmo_id = $checkEnrollee->hmo_id;
        //     $newCapitation->lives = 1;
        //     $newCapitation->cap_rate = $findRate->amount;
        //     $newCapitation->period = $bill->date_of_bill;
        //     $newCapitation->save();
        // }else{
        //     $checkCapitation->lives += 1;
        //     $checkCapitation->save();
        // }
        // dd($final_payment);
        
        Session::flash('success', 'The bill was sucessfully saved');
        return redirect()->route('bills.show', $bill->identifier);
    }

    public function show($id)
    {
        $bill = Bill::where('identifier', $id)->first();
        return view('dashboard.hmo.bills.show')
                    ->with('bill', $bill);
    }

    public function edit($id)
    {
        return view('dashboard.hmo.bills.edit');
    }

    public function update(Request $request, $id)
    {
        Session::flash('success', 'The bill was sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Session::flash('success', 'The bill was sucessfully deleted');
        return redirect()->route('bills.index');
    }

    public function getHcp()
    {
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->with('hcp', 'hcp.specificHmoAgreements')->get();
        return $enrollees;
    }

    public function getAllEnrollees()
    {
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        return $enrollees;
    }

    public function getEnrolleeHcp($enrollee_id)
    {
        $findEnrollee = $hcp = Enrollee::find($enrollee_id);
        $hcp = Hcp::find($findEnrollee->hcp_id);
        return $hcp;
    }

    public function getHmoAgreementWithHcp($hcp_id)
    {
        $agreement = Agreement::where('hcp_id', $hcp_id)->where('hmo_id', auth()->user()->userable->id)->with('agreementable')->get();
        return $agreement;
    }

    public function hmoSignBill($id)
    {
        $bill = Bill::where('identifier', $id)->first();

        if($bill->id){
            $checkCheckHowManyAlreadySigned = AuthorizationSignature::where('signable_type', 'bill')
                ->where('signable_id',  $bill->id)->first();
        }

        if($checkCheckHowManyAlreadySigned->count() >= auth()->user()->userable->hmo_signatories){
            Session::flash('success', 'The bill has already been signed by authorized signatories');
            return redirect()->back();
        }

        $checkIfAlreadySigned = AuthorizationSignature::where('signable_type', 'bill')
            ->where('operator_user_id',  auth()->user()->id)
            ->where('signable_id',  $bill->id)->first();

        if($checkIfAlreadySigned == null){
            Session::flash('success', 'The bill is already signed by you');
            return redirect()->back();
        }

        $sign = new AuthorizationSignature;
        $sign->operator_user_id = auth()->user()->id;
        $sign->approveSignature()->save($sign);

        Session::flash('success', 'The bill was sucessfully signed by '. auth()->user()->name);
        return redirect()->back();
    }
}
