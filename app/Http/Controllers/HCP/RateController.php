<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rate;

class RateController extends Controller
{
    public function index()
    {
        return view('dashboard.hcp.rates.index')->with('rates', Rate::all()); 
    }
}
