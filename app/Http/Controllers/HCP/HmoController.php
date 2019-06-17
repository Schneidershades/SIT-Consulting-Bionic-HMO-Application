<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hcp;
use App\Models\Hmo;
use App\Models\HmoHcp;
use Session;

class HmoController extends Controller
{
    public function index()
    {
    	$hmos = HmoHcp::where('hcp_id', auth()->user()->userable->id)->get();
        if($hmos == null){
        	Session::flash('info', 'You have no HMO Activated under you');
            return redirect()->back();
        }
        return view('dashboard.hcp.hmos.index')
                ->with('hmos', $hmos); 
    }
}
