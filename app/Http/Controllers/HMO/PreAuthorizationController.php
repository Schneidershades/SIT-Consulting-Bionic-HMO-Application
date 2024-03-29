<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Claim;
use Illuminate\Support\Facades\Session;

class PreAuthorizationController extends Controller
{
    public function index()
    {
        $transactions = Claim::where('pre_authorization', true)->where('hmo_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.pre-authorization.index')
                ->with('transactions', $transactions);
    }

    public function pending()
    {
        $transactions = Claim::where('pre_authorization', true)->where('status', 'pending')->where('hmo_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.pre-authorization.pending')
                ->with('transactions', $transactions);
    }

    public function show($identifier)
    {
    	$transaction = Claim::where('identifier', $identifier)->where('hmo_id', auth()->user()->userable->id)->first();
    	return view('dashboard.hmo.pre-authorization.show')
                ->with('transaction', $transaction);
    }

    public function verify($identifier)
    {
    	$transaction = Claim::where('identifier', $identifier)->first();

        if($transaction->status != 'pending'){
            Session::flash('success', 'Cannot perform activity on this item');
            return redirect()->back();
        }

    	if($transaction->status == 'verified'){
            Session::flash('success', 'Has already been verified');
    		return redirect()->back();
    	}
    	$transaction->status = 'verified';
    	$transaction->save();
        Session::flash('success', 'Item has been verified');
    	return redirect()->back();
    }

    public function cancel($identifier)
    {
    	$transaction = Claim::where('identifier', $identifier)->first();
        if($transaction->status != 'pending'){
            Session::flash('success', 'Cannot perform activity on this item');
            return redirect()->back();
        }

    	if($transaction->status == 'cancelled'){
            Session::flash('success', 'Has already been cancelled');
    		return redirect()->back();
    	}
    	$transaction->status = 'cancelled';
    	$transaction->save();
        Session::flash('success', 'Item has been cancelled');
    	return redirect()->back();
    }
}
