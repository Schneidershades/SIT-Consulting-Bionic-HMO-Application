<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Claim;

class ClaimController extends Controller
{
    public function index()
    {
    	$claims =  Claim::where('hmo_id', auth()->user()->userable->id)->where('status', 'verified')->get();
        return view('dashboard.hmo.claims.index')
                ->with('bills', $claims);
    }

    public function show($id)
    {
    	$claim =  Claim::where('identifier', $id)->where('status', 'verified')->first();
        return view('dashboard.hmo.claims.show')
                ->with('bill', $claim);
    }
}
