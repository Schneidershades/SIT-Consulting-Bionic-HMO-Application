<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rate;


class RateController extends Controller
{
    public function index()
    {
        return view('dashboard.hmo.rates.index')->with('rates', Rate::all()); 
    }
}
