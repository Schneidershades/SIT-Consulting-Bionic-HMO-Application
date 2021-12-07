<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Rate;
use App\Models\Capitation;
use App\Models\Hcp;
use App\Models\HmoHcp;

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
        $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->where('provider_payment_mechanism', 'capitation')->get();
        return view('dashboard.hmo.capitation.raise')
                ->with('hcps', $hcps);
    }

    public function raiseCapitation(Request $request)
    {
		$capitations = Capitation::where('hmo_id' ,auth()->user()->userable->id)->get();

        if($request->raiseCapitationFor == 'all'){
            $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->where('provider_payment_mechanism', 'capitation')->get();
            foreach ($hcps as $hcp) {
                if($hcp->hcp->enrollees->count() > 0){
                    $capitation =  new Capitation;
                    $capitation->hmo_id =  auth()->user()->userable->id;
                    $capitation->hcp_id =  $hcp->hcp->id;
                    $capitation->lives =  $hcp->hcp->enrollees->count();
                    $capitation->capitation_rate =   $hcp->capitation_agreement;
                    $capitation->remittance =   $hcp->capitation_agreement * $hcp->hcp->enrollees->count();
                    $capitation->period =  $request->period;
                    // $capitation->operator =  auth()->user()->id;
                    $capitation->save();
                }
            }
        }

        if($request->raiseCapitationFor == 'selectedHcps'){
            $hcps = HmoHcp::whereIn('hcp_id', $request->hcps)
                ->where('hmo_id', auth()->user()->userable->id)
                ->where('provider_payment_mechanism', 'capitation')
                ->get();
            
            foreach ($hcps as $hcp) {
                if($hcp->hcp->enrollees->count() > 0){
                    $capitation =  new Capitation;
                    $capitation->hmo_id =  auth()->user()->userable->id;
                    $capitation->hcp_id =  $hcp->hcp->id;
                    $capitation->lives =  $hcp->hcp->enrollees->count();
                    $capitation->capitation_rate =   $hcp->capitation_agreement;
                    $capitation->remittance =   $hcp->capitation_agreement * $hcp->hcp->enrollees->count();
                    $capitation->period =  $request->period;
                    // $capitation->operator =  auth()->user()->id;
                    $capitation->save();
                }
            }
        }

        return view('dashboard.hmo.capitation.index')->with('capitations', $capitations);
    }
}
