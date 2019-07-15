<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\UserPermission;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::where('userable_type', 'hmo')->where('userable_id', auth()->user()->userable->id)->get();
    	// dd($users);
    	return view('dashboard.hmo.users.index')
    		->with('users', $users);
    }

   	public function create()
   	{
   		return view('dashboard.hmo.users.create')
   			->with('roles', Role::where('roleable_type', 'hmo')->where('roleable_id', auth()->user()->userable->id)->get())
   			->with('permissions', Permission::all());
   	}

    public function store(Request $request)
    {
      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->userable_type = 'hmo';
      $user->userable_id = auth()->user()->userable->id;
      $user->save();

      $user->roles()->sync($request->roles);
      $user->givePermissionTo($request->permissions);
      
      Session::flash('success', 'User was sucessfully created');
      return redirect()->route('users.index');
    }

   	public function show($id)
   	{
      $user = User::findOrFail($id);
      $currentPermissions = UserPermission::where('user_id', $user->id)->pluck('permission_id')->toArray();
      // return($currentPermissions);
      if($currentPermissions == null){
        $filterCurrentPermissions = Permission::all();
      }else{
        $filterCurrentPermissions = Permission::whereNotIn('id', $currentPermissions)->get();
      }
   		return view('dashboard.hmo.users.show')
        ->with('permissions', $filterCurrentPermissions)
        ->with('user', $user);
   	}

   	public function addPermissions(Request $request, $id)
   	{
        $user = User::findOrFail($id);
        $user->permissions()->attach($request->permissions);
      
        Session::flash('success', 'Permission was sucessfully added');
        return redirect()->back();
   	}

    public function deletePermissions($user, $permission)
    {
        $user = UserPermission::where('permission_id', $permission)->where('user_id', $user)->first();
        $user->delete();
      
        Session::flash('success', 'Permission was sucessfully deleted');
        return redirect()->back();
    }
}
