<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Capitation;
use App\Models\Disbursement;
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
                    $capitation->month =   $request->month;
                    $capitation->year =   $request->year;
                    $capitation->remittance =   $hcp->capitation_agreement * $hcp->hcp->enrollees->count();
                    $capitation->period =  $request->period;
                    $capitation->disbursment = 'initiated';
                    $capitation->operator_id =  auth()->user()->id;
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
                    $capitation->month =   $request->month;
                    $capitation->year =   $request->year;
                    $capitation->disbursment = 'initiated';
                    $capitation->remittance =   $hcp->capitation_agreement * $hcp->hcp->enrollees->count();
                    $capitation->operator_id =  auth()->user()->id;
                    $capitation->save();
                }
            }
        }

        return redirect()->route('capitations.index');
    }

    public function process($id)
    {
        $cap = Capitation::find($id);
        $cap->disbursment = 'processing';
        $cap->save();

        $disbursement = new Disbursement; 
        $disbursement->hcp_id = $cap->hcp_id;
        $disbursement->hmo_id = $cap->hmo_id;
        $disbursement->disbursementable_id = $cap->id;
        $disbursement->disbursementable_type = 'capitation';
        $disbursement->remittance = $cap->remittance;
        $disbursement->amount = $cap->remittance;
        $disbursement->save();

        return redirect()->back();
    }

    public function decline($id)
    {
        $cap = Capitation::find($id);
        $cap->disbursment = 'declined';
        $cap->save();
        return redirect()->back();
    }
}
