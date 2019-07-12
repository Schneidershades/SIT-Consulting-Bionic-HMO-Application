<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DiseaseClass;
use Session;

class DiseaseClassController extends Controller
{
    public function index()
    {
    	$diseases = DiseaseClass::where('parent_id', NULL)->get();
    	return view('dashboard.hmo.diseases.index')
    			->with('diseases', $diseases);

    }

    public function create()
    {
    	$diseases = DiseaseClass::where('parent_id', NULL)->get();
        return view('dashboard.hmo.diseases.create')
                ->with('diseases', $diseases);
    	
    }

    public function store(Request $request)
    {
        // dd($request->all());
    	if($request->hcp_diseases_details){
            foreach($request->hcp_diseases_details as $hcp_disease){
                $find_disease = DiseaseClass::where('description', $hcp_disease['description'])->first();
                // dd($find_disease);
                if($find_disease == null){
                    $disease = new DiseaseClass;
                    $disease->disease_code = $hcp_disease['code'];
                    $disease->description = $hcp_disease['description'];
                    $disease->user_operator_user_id = auth()->user()->id;
                    $disease->user_type = auth()->user()->userable->id;
                    $disease->parent_id = $hcp_disease['parent_id'];
                    $disease->save();
                }
            }
        }

        Session::flash('success', 'The disease has been added');
        return redirect()->route('hmo-disease-classes.index'); 
    }

    public function show()
    {
    	$disease = DiseaseClass::findOrFail($id);
        return view('dashboard.hmo.diseases.show')
    			->with('disease', $disease);
    }

    public function edit()
    {
    	$disease = DiseaseClass::findOrFail($id);
        return view('dashboard.hmo.diseases.edit')
    			->with('disease', $disease); 
    }

    public function update(Request $request)
    {
    	$disease = DiseaseClass::findOrFail($id);
    	$disease->disease_code = $request->disease_code;
        $disease->description = $request->description;
        $disease->parent_id = $request->parent_id;
        $disease->save();
        Session::flash('success', 'The disease has been updated');
        return redirect()->route('hmo-disease-classes.index'); 
    }

    public function delete()
    {
    	$disease = DiseaseClass::findOrFail($id);
        $disease->delete();
        Session::flash('success', 'The disease has been deleted');
        return redirect()->route('hmo-disease-classes.index'); 
    }
}
