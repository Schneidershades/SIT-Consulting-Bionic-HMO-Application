<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hcp;
use App\Models\Hmo;
use App\Models\HmoHcp;
use App\Models\User;
use App\Models\Agreement;
use Illuminate\Support\Facades\Session;

class HcpController extends Controller
{
    public function index()
    {
        $selected_hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
        
        // dd($send_selected_hcps);
        if($selected_hcps == null){
            Session::flash('error', 'You have not activated any HCP under you');
            return redirect()->back();
        }
        // dd($hcps);
        return view('dashboard.hmo.hcps.index')
                ->with('selected_hcps', $selected_hcps); 
    }

    public function create()
    {
        $hcps = Hcp::with('hmos')->get();
        $array_hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->pluck('hcp_id')->toArray();
        $send_selected_hcps = Hcp::whereNotIn('id', $array_hcps)->get();
        // return $hcps;
        // $hcps_hmo = $hcps->hmos();
        return view('dashboard.hmo.hcps.create')
                ->with('hcps', $send_selected_hcps);
    }

    public function store(Request $request)
    {   
        // store for one time hcp registrations
        $hmo = Hmo::where('id', auth()->user()->userable->id)->first();
        $hmo->hcps()->attach($request->hcps);
        Session::flash('success', 'The Health Care Providers selected was integrated to your HMO activties');
        return redirect()->route('hcps.index');  
    }

    public function show($id)
    {
        $hcp = HmoHcp::where('hmo_id', auth()->user()->userable->id)->where('hcp_id', $id)->first();
        if($hcp == null){
            Session::flash('info', 'No rights given to see this file');
            return redirect()->route('hcp-hmos.index');
        }

        $agreements = Agreement::where('hmo_id', auth()->user()->userable->id)->where('hcp_id', $id)->get();
        // dd($agreement);
        return view('dashboard.hmo.hcps.show')
                ->with('hcp', $hcp)
                ->with('agreements', $agreements);
    }

    public function edit($id)
    {
        $hcp = Hcp::find($id);
        return view('dashboard.hmo.hcps.edit')
            ->with('hcp', $hcp);
    }

    public function update(Request $request, $id)
    {
        $hmo = Hmo::where('id', auth()->user()->userable->id)->first();
        $hmo->hcps()->sync($request->hcps);
        Session::flash('success', 'The Health Care Provider selected was updated to your HMO activties');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $hcp = Hcp::find($id);
        $findHcp = HmoHcp::where('hmo_id', auth()->user()->userable->id)->where('hcp_id',$hcp->id)->first();
        $findHcp->delete();
        Session::flash('success', 'The Health Care Provider selected was deleted from your HMO activties');
        return redirect()->route('hcps.index');
    }

    public function createHcpAccount(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->userable_type = $request->userable_type;
        $user->userable_id = $request->userable_id;
        $user->save();
        Session::flash('success', 'The HCP Account was sucessfully created');
        return redirect()->back();
    }

    public function setPaymentMechanism(Request $request)
    {
        $findHcp = HmoHcp::where('hmo_id', auth()->user()->userable->id)->where('hcp_id',$request->hcp_id)->first();
        $findHcp->provider_payment_mechanism = $request->provider_payment_mechanism;
        $findHcp->save();
        Session::flash('success', 'The payment setup has been updated to ' . $request->provider_payment_mechanism);
        return redirect()->back();
    }
}
