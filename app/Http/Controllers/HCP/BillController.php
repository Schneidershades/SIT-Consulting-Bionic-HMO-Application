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
use Session;

class BillController extends Controller
{
    public function index()
    {
        return view('dashboard.hcp.bills.index')
                ->with('bills', Bill::where('hcp_id', auth()->user()->userable->id)->get()); 
    }

    public function create()
    {

        $tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
        $drugs = Drug::where('amount', '!=', 0)->get();
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.bills.create')
                ->with('tariffs', $tariffs)
                ->with('drugs', $drugs)
                ->with('enrollees', $enrollees);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->enrollee_id){
            $checkEnrollee = Enrollee::where('id', $request->enrollee_id)->first();
        }

        $checkService = Tariff::whereIn('id', $request->hcp_service_details)->get();
        $checkdrugs = Drug::whereIn('id', $request->hcp_drug_details)->get();

        $service_deduction = Tariff::whereIn('id', $request->hcp_service_details)->sum('amount');
        $drug_deduction = Drug::whereIn('id', $request->hcp_drug_details)->sum('amount');
 
        $payment_to_hcp = $service_deduction + $drug_deduction;

        $final_payment_to_hcp = $request->amount_charged - $payment_to_hcp;

        // dd($final_payment);
        $bill = new Bill;
        $bill->enrollee_id = $checkEnrollee->id;
        $bill->hcp_id = auth()->user()->userable->id;
        $bill->hmo_id = $checkEnrollee->hmo_id;
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


         // setup capitation
        $service = new TariffDrugTransaction;
        if($request->hcp_drug_details){
            foreach($request->hcp_service_details as $bill_detail){
                $find_service = Tariff::where('id', $bill_detail['treatment_id'])->first();
                $service->enrollee_id = $checkEnrollee->id;
                $service->hcp_id = auth()->user()->userable->id;
                $service->hmo_id = $checkEnrollee->hmo_id;
                $service->period = $request->date;
                $find_service->serviceItems()->save($service);
            }
        }

        $drug = new TariffDrugTransaction;
        if($request->hcp_drug_details){
            foreach($request->hcp_drug_details as $drug_detail){
                $find_drug = Tariff::where('id', $drug_detail['drug_id'])->first();
                $drug->enrollee_id = $checkEnrollee->id;
                $drug->hcp_id = auth()->user()->userable->id;
                $drug->hmo_id = $checkEnrollee->hmo_id;
                $drug->period = $request->date;
                $find_drug->serviceItems()->save($drug);
            }
        }
        

        $time = strtotime($bill->date_of_bill);

        // setup capitation
        $findRate = Rate::where('name', 'capitation')->first();

        $checkCapitation = Capitation::where('hcp_id', $checkEnrollee->hcp_id)
                    ->where('hmo_id', auth()->user()->userable->id)
                    ->whereMonth('period', date("F",$time))
                    ->whereYear('period', date("Y",$time))->first();

        if($checkCapitation == null){
            $newCapitation = new Capitation;
            $newCapitation->hcp_id = auth()->user()->userable->id;
            $newCapitation->hmo_id = $checkEnrollee->hmo_id;
            $newCapitation->lives = 1;
            $newCapitation->cap_rate = $findRate->amount;
            $newCapitation->period = $bill->date_of_bill;
            $newCapitation->save();
        }else{
            $checkCapitation->lives += 1;
            $checkCapitation->save();
        }
        // dd($final_payment);
        Session::flash('success', 'The bill was sucessfully saved');
        return redirect()->route('bills.index');
    }

    public function show($id)
    {
        $bill = Bill::find($id);
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
