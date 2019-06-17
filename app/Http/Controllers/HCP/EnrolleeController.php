<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enrollee;
use App\Models\HealthCarePlan;
use App\Models\Hmo;
use App\Models\HmoHcp;
use Session;

class EnrolleeController extends Controller
{

    public function index()
    {
        $enrollees = Enrollee::where('hcp_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.enrollees.index')
                ->with('enrollees', $enrollees); 
    }

    public function show($id)
    {
        return view('dashboard.hcp.enrollees.show')
                ->with('enrollee', Enrollee::find($id));
    }
}
