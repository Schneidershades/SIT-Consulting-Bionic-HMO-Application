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

    public function index()
    {
        $transactions = TariffDrugTransaction::where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }
}
