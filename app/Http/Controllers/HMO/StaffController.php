<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Session;

class StaffController extends Controller
{
    public function index()
    {
        return view('dashboard.hmo.staff.index')
                ->with('staffs', Staff::where('hmo_id', auth()->user()->userable->id)); 
    }

    public function create()
    {
        return view('dashboard.hmo.staff.create');
    }

    public function store(Request $request)
    {
        $hmo = Staff::where('hmo_id', auth()->user()->userable->id)->get();

        $staff = new Staff;
        $staff->identifier = $request->identifier;
        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->middle_name = $request->middle_name;
        $staff->sex = $request->sex;
        $staff->dob = $request->dob;
        $staff->rank = $request->rank;
        $staff->profession = $request->profession;
        $staff->designation = $request->designation;
        $staff->department = $request->department;
        $staff->qualification = $request->qualification;
        $staff->postion = $request->postion;
        $staff->confirmed = $request->confirmed;
        $staff->pension_managers = $request->pension_managers;
        $staff->initial_appointment_date = $request->initial_appointment_date;
        $staff->present_appointment_date = $request->present_appointment_date;
        $staff->employment_type = $request->employment_type;
        $staff->current_location = $request->current_location;
        $staff->previous_location = $request->previous_location;
        $staff->bank_account_number = $request->bank_account_number;
        $staff->bank_name = $request->bank_name;
        $staff->nationality = $request->nationality;
        $staff->state = $request->state;
        $staff->lga = $request->lga;
        $staff->pob = $request->pob;
        $staff->marital_status = $request->marital_status;
        $staff->phone_number = $request->phone_number;
        $staff->residential_address = $request->residential_address;
        $staff->contact_address = $request->contact_address;
        $staff->height = $request->height;
        $staff->weight = $request->weight;
        $staff->genotype = $request->genotype;
        $staff->blood_group = $request->blood_group;
        $staff->state_deformity = $request->state_deformity;

        $hmo->staffable()->save($staff);

        Session::flash('success', 'The staff was Sucessfully saved');

        return redirect()->route('staff.index');

    }

    public function show($id)
    {
        return view('dashboard.hmo.staff.show');
    }

    public function edit($id)
    {
        return view('dashboard.hmo.staff.edit');
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->identifier = $request->identifier;
        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->middle_name = $request->middle_name;
        $staff->sex = $request->sex;
        $staff->dob = $request->dob;
        $staff->rank = $request->rank;
        $staff->profession = $request->profession;
        $staff->designation = $request->designation;
        $staff->department = $request->department;
        $staff->qualification = $request->qualification;
        $staff->postion = $request->postion;
        $staff->confirmed = $request->confirmed;
        $staff->pension_managers = $request->pension_managers;
        $staff->initial_appointment_date = $request->initial_appointment_date;
        $staff->present_appointment_date = $request->present_appointment_date;
        $staff->employment_type = $request->employment_type;
        $staff->current_location = $request->current_location;
        $staff->previous_location = $request->previous_location;
        $staff->bank_account_number = $request->bank_account_number;
        $staff->bank_name = $request->bank_name;
        $staff->nationality = $request->nationality;
        $staff->state = $request->state;
        $staff->lga = $request->lga;
        $staff->pob = $request->pob;
        $staff->marital_status = $request->marital_status;
        $staff->phone_number = $request->phone_number;
        $staff->residential_address = $request->residential_address;
        $staff->contact_address = $request->contact_address;
        $staff->height = $request->height;
        $staff->weight = $request->weight;
        $staff->genotype = $request->genotype;
        $staff->blood_group = $request->blood_group;
        $staff->state_deformity = $request->state_deformity;

        $staff->save();

        Session::flash('success', 'The staff was Sucessfully saved');

        return redirect()->route('staff.index');
        Session::flash('success', 'The Health Care Provider was sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Session::flash('success', 'The Health Care Provider was sucessfully deleted');
        return redirect()->route('staff.index');
    }
}
