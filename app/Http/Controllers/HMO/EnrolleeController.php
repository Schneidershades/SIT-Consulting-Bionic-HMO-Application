<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enrollee;
use App\Models\HealthCarePlan;
use App\Models\Hmo;
use App\Models\HmoHcp;
use App\Models\HcpTransfer;
use App\Models\HealthCarePlanBenefit;
use Session;

class EnrolleeController extends Controller
{

    public function index()
    {
        $plans = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('parent_id', '!=', NULL)->get();
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.enrollees.index')
                ->with('plans', $plans)
                ->with('enrollees', $enrollees); 
    }

    public function create()
    {
        $plans = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('parent_id', '=', NULL)->get();
        $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.enrollees.create')
                ->with('plans', $plans)
                ->with('hcps', $hcps);
    }

    public function store(Request $request)
    {
        if($request->identifier){
            $checkEnrolleeExist = Enrollee::where('identifier', $request->identifier)->first();
            if($checkEnrolleeExist != null){
                Session::flash('error', 'The enrollee already exists');
                return redirect()->back();
            }
        }
        $enrollee = new Enrollee;
        $enrollee->identifier = $request->identifier;
        $enrollee->hmo_id = auth()->user()->userable->id;
        $enrollee->hcp_id = $request->hcp_id;
        $enrollee->health_plan_id = $request->health_plan_id;
        $enrollee->first_name = $request->first_name;
        $enrollee->middle_name = $request->middle_name;
        $enrollee->last_name = $request->last_name;
        $enrollee->gender = $request->gender;
        $enrollee->email = $request->email;
        $enrollee->residential_address = $request->residential_address;
        $enrollee->residential_state = $request->residential_state;
        $enrollee->phone_number = $request->phone_number;
        $enrollee->dob = $request->dob;
        $enrollee->occupation = $request->occupation;
        $enrollee->company = $request->company;
        $enrollee->company_sector = $request->company_sector;
        $enrollee->nationality = $request->nationality;
        $enrollee->save();

        $user = new User;
        $user->name = $request->first_name .' '. $request->middle_name .' '. $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->userable_type = $request->userable_type;
        $user->userable_id = $request->userable_id;

        $enrollee->user()->save($user);

        Session::flash('success', 'The Enrollee Account was sucessfully created');

        $dependant = new Enrollee;
        if($request->hcp_dependant_details){
            foreach($request->hcp_dependant_details as $dependants){
                if($dependants['add_to_parent'] == "yes"){
                    $dependant->first_name = $dependants['first_name'];
                    $dependant->middle_name = $dependants['middle_name'];
                    $dependant->last_name = $dependants['last_name'];
                    $dependant->gender = $dependants['gender'];
                    $dependant->email = $dependants['email'];
                    $dependant->residential_address = $dependants['residential_address'];
                    $dependant->residential_state = $dependants['residential_state'];
                    $dependant->phone_number = $dependants['phone_number'];
                    $dependant->dob = $dependants['dob'];
                    $dependant->occupation = $dependants['occupation'];
                    $dependant->company = $dependants['company'];
                    $dependant->company_sector = $dependants['company_sector'];
                    $dependant->nationality = $dependants['nationality'];

                    $dependant->parent_id = $enrollee->id;
                    $dependant->hmo_id = $request->hmo_id;
                    $dependant->hcp_id = $request->hcp_id;
                    $dependant->health_plan_id = $request->health_plan_id;
                    $dependant->save();
                }
            }
        }
        
        

        Session::flash('success', 'The enrollee credentials was sucessfully saved');
        return redirect()->route('enrollees.show', $enrollee->id);   
    }

    public function show($id)
    {
        return view('dashboard.hmo.enrollees.show')
                ->with('enrollee', Enrollee::find($id))
                ->with('dependants', Enrollee::where('parent_id', $id)->get());
    }

    public function edit($id)
    {
        return view('dashboard.hmo.enrollees.edit')
                ->with('enrollee', Enrollee::find($id));
    }

    public function update(Request $request, $id)
    {
        $enrollee = Enrollee::find($id);
        $enrollee->identifier = $request->identifier;
        $enrollee->hmo_id = auth()->user()->userable()->id;
        $enrollee->hcp_id = $request->hcp_id;
        $enrollee->health_plan_id = $request->health_plan_id;
        $enrollee->first_name = $request->first_name;
        $enrollee->middle_name = $request->middle_name;
        $enrollee->last_name = $request->last_name;
        $enrollee->gender = $request->gender;
        $enrollee->email = $request->email;
        $enrollee->residential_address = $request->residential_address;
        $enrollee->residential_state = $request->residential_state;
        $enrollee->phone_number = $request->phone_number;
        $enrollee->dob = $request->dob;
        $enrollee->occupation = $request->occupation;
        $enrollee->company = $request->company;
        $enrollee->company_sector = $request->company_sector;
        $enrollee->nationality = $request->nationality;
        $enrollee->parent_id = NULL;
        $enrollee->save();

        $enrollee->dependant->detach();

        $dependant = new Enrollee;
        foreach($request->hcp_dependant_details as $dependants){
            $dependant->first_name = $request['first_name'];
            $dependant->middle_name = $request['middle_name'];
            $dependant->last_name = $request['last_name'];
            $dependant->gender = $request['gender'];
            $dependant->email = $request['email'];
            $dependant->residential_address = $request['residential_address'];
            $dependant->residential_state = $request['residential_state'];
            $dependant->phone_number = $request['phone_number'];
            $dependant->dob = $request['dob'];
            $dependant->occupation = $request['occupation'];
            $dependant->company = $request['company'];
            $dependant->company_sector = $request['company_sector'];
            $dependant->nationality = $request['nationality'];

            $dependant->parent_id = $enrollee->id;
            $dependant->hmo_id = $request->hmo_id;
            $dependant->hcp_id = $request->hcp_id;
            $dependant->health_plan_id = $request->health_plan_id;
            $dependant->save();
        }

        Session::flash('success', 'The enrollee was sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $enrollee = Enrollee::find($id);
        $enrollee->delete();
        Session::flash('success', 'The enrollee was sucessfully deleted');
        return redirect()->route('enrollees.index');
    }

    public function transfer()
    {
        $transfers = HcpTransfer::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.enrollees.transfers')
                ->with('transfers', $transfers); 
    }

    public function changeEnrolleeHcp()
    {
        $enrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->get();
        $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.enrollees.change_enrollee_hcp')
                ->with('enrollees', $enrollees)
                ->with('hcps', $hcps); 
    }

    public function changeHcpStore(Request $request)
    {
        $hmo = Hmo::find(auth()->user()->userable->id);
        $enrollee = Enrollee::find($request->enrollee_id);

        $transfer = new HcpTransfer;
        $transfer->transfer_to_hcp_id = $enrollee->hcp_id;
        $transfer->transfer_from_hcp_id = $request->hcp_id;
        $transfer->enrollee_id = $request->enrollee_id;
        $transfer->hmo_id = auth()->user()->userable->id;
        $transfer->transfer_reason = $request->reason;
        $transfer->requesting_user_id = auth()->user()->id;
        $hmo->transfer()->save($transfer);

        return redirect()->route('enrollees.change.hcp.request');
    }

    public function pendingEnrolleeHcpChangeRequest()
    {
        $transfers = HcpTransfer::where('hmo_id', auth()->user()->userable->id)->where('action', 'pending')->get();
        return view('dashboard.hmo.enrollees.pending_hcp_change')
                ->with('transfers', $transfers); 
    }

    public function allEnrolleeHcpTransfers()
    {
        $transfers = HcpTransfer::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.enrollees.all_enrollee_transfers')
                ->with('transfers', $transfers); 
    }

    public function showEnrolleeHcpChangeRequest($id)
    {
        $transfer = HcpTransfer::find($id);
        return view('dashboard.hmo.enrollees.show_hcp_change')
                ->with('transfer', $transfer); 
    }

    public function cancelRequest($id)
    {
        $transfer = HcpTransfer::find($id);
        $transfer->action = 'cancelled';
        $transfer->approving_user_id = auth()->user()->id;
        $transfer->save();
        return redirect()->back(); 
    }

    public function verifyRequest($id)
    {
        $transfer = HcpTransfer::find($id);
        $transfer->action = 'verified';
        $transfer->approving_user_id = auth()->user()->id;
        $transfer->save();

        // $enrollee = $transfer->enrollee();
        // $enrollee->hcp_id = $transfer->transfer_to_hcp_id;
        // $enrollee->save();
        return redirect()->back(); 
    }
}
