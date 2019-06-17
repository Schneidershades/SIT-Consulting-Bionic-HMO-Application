<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bill;

class ClaimController extends Controller
{
    public function index()
    {
    	$claims =  Bill::where('hcp_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.claims.index')
                ->with('bills', $claims);
    }
}
