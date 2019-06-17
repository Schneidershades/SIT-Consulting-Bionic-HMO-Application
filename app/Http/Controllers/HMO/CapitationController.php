<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Rate;
use App\Models\Capitation;
use App\Models\Hcp;

class CapitationController extends Controller
{
    public function index()
    {
		$capitations = Capitation::where('hmo_id' ,auth()->user()->userable->id)->get();
		return view('dashboard.hmo.capitation.index')
			->with('capitations', $capitations);
    }

    public function raiseCreateCapitation()
    {
        $hcps = Hcp::with('hmos')->get();
        return view('dashboard.hmo.capitation.raise')
                ->with('hcps', $hcps);
    }

    public function raiseCapitation()
    {
        $findRate = Rate::where('name', 'capitation')->first();

        if($request->raiseCapitationFor == 'all'){
            $hcps = Hcp::all();
            foreach ($hcps as $hcp) {
                $capitation =  new Capitation;
                $capitation->hmo_id =  auth()->user()->userable->id;
                $capitation->hcp_id =  $hcp->id;
                $capitation->lives =  $request->lives;
                $capitation->cap_rate =   $findRate->amount;
                $capitation->period =  $request->period;
                $capitation->operator =  auth()->user()->id;
                $capitation->save();
            }
        }

        if($request->raiseCapitationFor != 'all'){
            $hcps = Hcp::whereIn('id', $request->hcp_id)->get();
            foreach ($hcps as $hcp) {
                $capitation =  new Capitation;
                $capitation->hmo_id =  auth()->user()->userable->id;
                $capitation->hcp_id =  $hcp->id;
                $capitation->lives =  $request->lives;
                $capitation->cap_rate =   $findRate->amount;
                $capitation->period =  $request->period;
                $capitation->operator =  auth()->user()->id;
                $capitation->save();
            }
        }
    	
    }
}
