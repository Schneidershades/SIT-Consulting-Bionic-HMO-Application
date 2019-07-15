<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::where('roleable_type')->where('userable_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.roles.index')->with('roles', $roles);
    }

    public function create()
    {
        return view('dashboard.hcp.roles.create');
    }

    public function store(Request $request)
    {
        $role =  new Role;
        $role->name = $request->name;
        $role->roleable_id = auth()->user()->userable->id;
        $role->roleable_type = 'hcp';
        $role->save();
        Session::flash('success', 'role was sucessfully created');
        return redirect()->route('hcp-roles.index', $role->id);
    }

    public function show($id)
    {
        $role =  Role::findOrFail($id);
        return view('dashboard.hcp.roles.show')->with('role', $role);
    }

    public function edit($id)
    {
        $role =  Role::findOrFail($id);
        return view('dashboard.hcp.roles.edit')->with('role', $role);
    }

    public function update(Request $request, $id)
    {
        $role =  Role::findOrFail($id);
        $role->name = $request->name;
        $role->roleable_id = auth()->user()->userable->id;
        $role->roleable_type = 'hcp';
        $role->save();
        Session::flash('success', 'role was sucessfully updated');
        return redirect()->route('hcp-roles.show', $role->id);
    }

    public function destroy($id)
    {
        $role =  role::findOrFail($id);
        $role->delete();
        Session::flash('success', 'role was sucessfully deleted');
        return redirect()->route('hcp-roles.index');
    }
}
