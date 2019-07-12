<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CashTransaction;
use App\Models\CashClassification;
use App\Models\CashType;
use App\Models\Hmo;
use Session;

class CashController extends Controller
{
    public function index()
    {
        return view('dashboard.hmo.cash.index')
                ->with('cashes', CashTransaction::where('hmo_id', auth()->user()->userable->id)); 
    }

    public function create()
    {
        $classes = CashClassification::all();
        $types = CashType::all();
        return view('dashboard.hmo.cash.create')
                ->with('classes', $classes)
                ->with('types', $types);
    }

    public function store(Request $request)
    {
        // $user = Hmo::find(auth()->user()->userable->id);
        // dd($request->all());
        $cash = new CashTransaction;
        if($request->cash_transaction_details){
            foreach($request->cash_transaction_details as $cash_detail){
                $cash->cash_type_id = $cash_detail['transaction_type_id'];
                $cash->cash_classification_id = $cash_detail['transaction_classification_id'];
                $cash->transaction_date = $cash_detail['transaction_date'];
                $cash->transaction_reference = $cash_detail['transaction_reference'];
                $cash->amount = $cash_detail['amount'];
                $cash->description = $cash_detail['description'];
                $cash->payment_method = $cash_detail['payment_method'];
                $cash->operator_user_id = auth()->user()->userable->id;
                $cash->save();
            }
        }
        Session::flash('success', 'The cash transaction was sucessfully saved');
        return redirect()->route('cash.index');
    }

    public function show($id)
    {
        $cash = Enrollee::where('identifier', $id)->first();
        return view('dashboard.hmo.cash.show')
                ->with('cash', $cash);
    }

    public function edit($id)
    {
        $cash = Enrollee::where('identifier', $id)->first();
        return view('dashboard.hmo.cash.edit')
                ->with('cash', $cash);
    }
}
