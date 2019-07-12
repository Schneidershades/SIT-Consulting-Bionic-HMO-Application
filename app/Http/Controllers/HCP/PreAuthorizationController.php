<?php

namespace App\Http\Controllers\HCP;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Claim;

class PreAuthorizationController extends Controller
{
    public function pending()
    {
        $transactions = Claim::where('pre_authorization', true)->where('status', 'pending')->where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }

    public function index()
    {
        $transactions = Claim::where('hcp_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hcp.pre-authorization.pending')
                ->with('transactions', $transactions);
    }
}
