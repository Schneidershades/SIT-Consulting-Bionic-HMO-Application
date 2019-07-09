<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agreement;

class AgreementController extends Controller
{
    public function index()
    {
    	$agreements = Agreement::where('hcp_id' ,auth()->user()->userable->id)->get();
        return view('dashboard.hcp.agreements.index')->with('agreements', $agreements); 
    }
}
