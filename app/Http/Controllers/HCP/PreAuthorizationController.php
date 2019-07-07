<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TariffDrugTransaction;

class PreAuthorizationController extends Controller
{
    public function pending()
    {
        $transactions = TariffDrugTransaction::where('pre_authorization', true)->where('status', 'pending')->where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }

    public function verified()
    {
        $transactions = TariffDrugTransaction::where('pre_authorization', true)->where('status', 'verified')->where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }

    public function failed()
    {
        $transactions = TariffDrugTransaction::where('pre_authorization', true)->where('status', 'fail')->where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }
}
