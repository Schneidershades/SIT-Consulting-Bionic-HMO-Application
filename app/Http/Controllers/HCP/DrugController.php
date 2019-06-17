<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drug;

class DrugController extends Controller
{
     public function index()
    {
    	$drugs = Drug::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
    	return view('dashboard.hcp.drugs.index')
    			->with('drugs', $drugs);
    }
}
