<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

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
   			->with('roles', Role::all())
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
   		return view('dashboard.hmo.users.show');
   	}

   	public function destroy()
   	{

   	}
}
