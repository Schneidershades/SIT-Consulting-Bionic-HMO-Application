<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Capitation;
use App\Models\Assessment;
use App\Models\Claim;
use App\Models\Enrollee;
use App\Models\HmoHcp;
use App\Models\Hmo;
use App\Models\Hcp;
use App\Models\Rate;
use App\Models\Tariff;
use App\Models\Drug;
use App\Models\Staff;
use App\Models\Agreement;
use Illuminate\Database\Eloquent\Relations\Relation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(auth()->user()->userable_type == 'hmo'){

            return view('dashboard.hmo.home')
                ->with('hmo_bills', Bill::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_assessments', Assessment::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_capitations', Capitation::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_claims', Bill::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_enrollees', Enrollee::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_hcps', HmoHcp::where('hmo_id', auth()->user()->userable->id)->get())
                ->with('hmo_branches', Hmo::where('id', auth()->user()->userable->id)->whereNotNull('parent_hmo_id')->get())
                ->with('hmo_tariffs', Tariff::all())
                ->with('hmo_drugs', Drug::all());
        }

        if(auth()->user()->userable_type == 'hcp'){

            return view('dashboard.hcp.home')
                ->with('hcp_hmos', HmoHcp::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_bills', Bill::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_assessments', Assessment::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_capitations', Capitation::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_claims', Bill::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_enrollees', Enrollee::where('hcp_id', auth()->user()->userable->id)->get())
                ->with('hcp_tariffs', Tariff::all())
                ->with('hcp_agreements', Agreement::where('hcp_id' ,auth()->user()->userable->id)->get())
                ->with('hcp_drugs', Drug::all())
            ;
        }

    }

    public function SignHere($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId, $action)
    {
        $item = FunctionHelpers::signAnything($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId);
        Session::flash($item['status'], $item['message']);
        return redirect()->back();
    }
}
