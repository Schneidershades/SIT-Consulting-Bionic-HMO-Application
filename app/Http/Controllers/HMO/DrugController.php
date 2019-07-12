<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drug;

class DrugController extends Controller
{
    public function index()
    {
    	$drugs = Drug::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
    	return view('dashboard.hmo.drugs.index')
    			->with('drugs', $drugs);
    }

    public function create()
    {
    	$drugs = Drug::where('parent_id', 'NULL')->get();
    	return view('dashboard.hmo.drugs.create')
    			->with('parent_drugs', $drugs);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hcp_drug_details){
            foreach($request->hcp_drug_details as $hcp_drug){
                $find_drug = Drug::where('id', $hcp_drug['parent_id'])->first();
                if($find_drug != null){
                    $drug = new Drug;
                    $drug->drug_name = $hcp_drug['name'];
                    $drug->dosage_form = $hcp_drug['dosage_form'];
                    $drug->strength = $hcp_drug['strength'];
                    $drug->presentation = $hcp_drug['presentation'];
                    $drug->parent_id = $hcp_drug['parent_id'];
                    $drug->save();
                }
            }
        }

        Session::flash('success', 'The drug has been added');
        return redirect()->route('hmo-drugs.index'); 
    }

    public function destroy($id)
    {
        $tariffs = Drug::findOrFail($id);
        $tariffs->delete();
        Session::flash('success', 'The drug has been deleted');
        return redirect()->route('hmo-drugs.index'); 
    }


    public function delete($id)
    {
    	$drug = Drug::findOrFail($id);
    	$drug->delete();
    }
}
