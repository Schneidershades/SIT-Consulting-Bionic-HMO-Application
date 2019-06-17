<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tariff;

class TariffController extends Controller
{
    public function index()
    {
    	$tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
    	return view('dashboard.hcp.tariffs.index')
    			->with('tariffs', $tariffs);
    }
}
