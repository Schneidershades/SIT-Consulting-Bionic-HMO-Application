<?php

namespace App\Http\Controllers\HCP;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hcp;
use App\Models\Hmo;
use App\Models\HmoHcp;
use App\Models\Agreement;
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

    public function show($id)
    {
        $hmo = HmoHcp::where('hcp_id', auth()->user()->userable->id)->where('hmo_id', $id)->first();
        if($hmo == null){
            Session::flash('info', 'No rights given to see this file');
            return redirect()->route('hcp-hmos.index');
        }
        $agreements = Agreement::where('hcp_id', auth()->user()->userable->id)->where('hmo_id', $id)->get();
        return view('dashboard.hcp.hmos.show')
                ->with('hmo', $hmo)
                ->with('agreements', $agreements); 
    }
}
