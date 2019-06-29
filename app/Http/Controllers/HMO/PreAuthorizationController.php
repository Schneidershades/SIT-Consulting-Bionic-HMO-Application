<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TariffDrugTransaction;

class PreAuthorizationController extends Controller
{
    public function index()
    {
        $transactions = TariffDrugTransaction::where('pre_authorization', true)->where('hmo_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.pre-authorization.index')
                ->with('transactions', $transactions);
    }

    public function pending()
    {
        $transactions = TariffDrugTransaction::where('pre_authorization', true)->where('status', 'pending')->where('hmo_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.pre-authorization.pending')
                ->with('transactions', $transactions);
    }

    public function show()
    {
    	$transaction = TariffDrugTransaction::where('identifier', $identifier)->first();
    	return view('dashboard.hmo.pre-authorization.show')
                ->with('transaction', $transaction);
    }

    public function verify($identifier)
    {
    	$transactions = TariffDrugTransaction::where('identifier', $identifier)->first();
    	if($transaction->status == 'verified'){
    		return redirect()->back();
    	}
    	$transaction->status = 'verified';
    	$transaction->save();
    	return redirect()->back();
    }

    public function cancel($identifier)
    {
    	$transactions = TariffDrugTransaction::where('identifier', $identifier)->first();
    	if($transaction->status == 'cancelled'){
    		return redirect()->back();
    	}
    	$transaction->status = 'cancelled';
    	$transaction->save();
    	return redirect()->back();
    }
}
