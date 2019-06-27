<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TariffDrugTransaction;

class PreAuthorizationController extends Controller
{
    public function index()
    {
    	$transactions = TariffDrugTransaction::where('pre_authorization', true)->where('status', 'pending')->get();
    	return view('dashboard.hmo.pre-authorization.index')
                ->with('transactions', $transactions);
    }

    public function verify($identifier)
    {

    }

    public function cancel($identifier)
    {

    }
}
