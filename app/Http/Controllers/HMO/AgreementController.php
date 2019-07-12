<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\HmoHcp;
use App\Models\Tariff;
use App\Models\Drug;

class AgreementController extends Controller
{
    public function index()
    {
    	$agreements = Agreement::where('hmo_id' ,auth()->user()->userable->id)->get();
        return view('dashboard.hmo.agreements.index')->with('agreements', $agreements); 
    }

    public function create()
    {
    	$tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
    	$hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
    	$drugs = Drug::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
        return view('dashboard.hmo.agreements.create')
        		->with('tariffs', $tariffs)
        		->with('drugs', $drugs)
        		->with('hcps', $hcps);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hcp_tariff_agreements_details){
            foreach($request->hcp_tariff_agreements_details as $hcp_tariff){
                $find_tariff = Agreement::where('hmo_id', auth()->user()->userable->id)
                                    ->where('hcp_id', $request->hcp_id)
                                    ->where('agreementable_type', 'tariff')
                                    ->where('agreementable_id', $hcp_tariff['tariff_id'])
                                    ->first();
                if($find_tariff != null){
                    $find_tariff->hmo_id = auth()->user()->userable->id;
                    $find_tariff->hcp_id = $request->hcp_id;
                    $find_tariff->service_type = $hcp_tariff['service_type'];
                    $find_tariff->amount = $hcp_tariff['amount'];
                    $find_tariff->save();
                }else{
                    $check_tariff = Tariff::where('id', $hcp_tariff['tariff_id'])->first();
                    $tariffAgreement = new Agreement;
                    $tariffAgreement->hmo_id = auth()->user()->userable->id;
                    $tariffAgreement->hcp_id = $request->hcp_id;
                    $tariffAgreement->service_type = $hcp_tariff['service_type'];
                    $tariffAgreement->amount = $hcp_tariff['amount'];
                    $check_tariff->tariffAgreements()->save($tariffAgreement);
                }
            }
        }

        if($request->hcp_drug_agreements_details){
            foreach($request->hcp_drug_agreements_details as $hcp_drug){
                $find_drug = Agreement::where('hmo_id', auth()->user()->userable->id)
                                    ->where('hcp_id', $request->hcp_id)
                                    ->where('agreementable_type', 'drug')
                                    ->where('agreementable_id', $hcp_drug['drug_id'])
                                    ->first();
                if($find_drug != null){
                    $find_drug->hmo_id = auth()->user()->userable->id;
                    $find_drug->hcp_id = $request->hcp_id;
                    $find_drug->service_type = $hcp_drug['service_type'];
                    $find_drug->amount = $hcp_drug['amount'];
                    $find_drug->save();
                }else{
                    $check_drug = Drug::where('id', $hcp_drug['drug_id'])->first();
                    $drugAgreement = new Agreement;
                    $drugAgreement->hmo_id = auth()->user()->userable->id;
                    $drugAgreement->hcp_id = $request->hcp_id;
                    $drugAgreement->service_type = $hcp_drug['service_type'];
                    $drugAgreement->amount = $hcp_drug['amount'];
                    $check_drug->drugAgreements()->save($drugAgreement);
                }
            }
        }
        return redirect()->route('hcps.show', $request->hcp_id);
    }

    public function destroy($id)
    {
        $agreement = Agreement::where('id', $id)->where('hmo_id', auth()->user()->userable->id)->first();
        $agreement->delete();
        return redirect()->back();
    }

}
