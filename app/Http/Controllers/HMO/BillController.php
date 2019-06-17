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
use App\Models\ServiceDrugTransaction;
use Session;


class BillController extends Controller
{
    public function index()
    {
        // $bills =  Bill::where('hmo_id', auth()->user()->userable->id)->get();
        // return view('dashboard.hmo.bills.index')
        //         ->with('bills', $bills);

        $bills =  Agreement::where('hmo_id', auth()->user()->userable->id)->where('hcp_id')->get();
        return view('dashboard.hmo.bills.index')
                ->with('bills', $bills);  
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
        
        $service = new ServiceDrugTransaction;
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

        $drug = new ServiceDrugTransaction;
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
}
