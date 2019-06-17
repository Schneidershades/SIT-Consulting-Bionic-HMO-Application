<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;

class ClaimController extends Controller
{
    public function index()
    {
    	$claims =  Bill::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.claims.index')
                ->with('bills', $claims);
    }

    public function show($id)
    {
    	$claim =  Bill::where('identifier', $id)->first();
        return view('dashboard.hmo.claims.show')
                ->with('bill', $claim);
    }
}
