<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tariff;

class TariffController extends Controller
{
    public function index()
    {
    	$tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();

    	return view('dashboard.hmo.tariffs.index')
    			->with('tariffs', $tariffs);
    }

    public function create()
    {
        $tariffs = Tariff::where('amount', 0)->where('parent_id', NULL)->get();
        return view('dashboard.hmo.tariffs.create')
                ->with('parent_tariffs', $tariffs);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hcp_tariffs_details){
            foreach($request->hcp_tariffs_details as $hcp_tariff){
                $find_tarrif = Tariff::where('id', $hcp_tariff['parent_id'])->first();
                if($find_tarrif != null){
                    $tariff = new Tariff;
                    $tariff->tariff_code = $hcp_tariff['code'];
                    $tariff->description = $hcp_tariff['description'];
                    $tariff->parent_id = $find_tarrif->id;
                    $tariff->save();
                }
            }
        }

        Session::flash('success', 'The Tariff has been added');
        return redirect()->route('hmo-tarrifs.index'); 
    }

    public function destroy($id)
    {
        $tariffs = Tariff::findOrFail($id);
        $tariffs->delete();
        Session::flash('success', 'The Tariff has been deleted');
        return redirect()->route('hmo-tarrifs.index'); 
    }

    public function tariffApi()
    {
    	$tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
    	return $tariffs;
    }

}
