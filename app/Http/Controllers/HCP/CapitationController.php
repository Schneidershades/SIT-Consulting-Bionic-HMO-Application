<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Capitation;

class CapitationController extends Controller
{
    public function index()
    {
		$capitations = Capitation::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.capitation.index')->with('capitations', $capitations); 

		return view('dashboard.hmo.capitation.index')
			->with('capitations', $capitations);
    }
}
