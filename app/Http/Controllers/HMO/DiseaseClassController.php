<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DiseaseClass;

class DiseaseClassController extends Controller
{
    public function index()
    {
    	$classes = DiseaseClass::where('parent_id', '!=' , NULL)->where('user_type', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.diseases.index')
    			->with('classes', $classes);

    }

    public function create()
    {
    	$classes = DiseaseClass::where('parent_id', NULL)->get();
        return view('dashboard.hmo.diseases.create')
                ->with('classes', $classes);
    	
    }

    public function store()
    {
    	if($request->hcp_disease_details){
            foreach($request->hcp_disease_details as $hcp_disease){
                $find_disease = DiseaseClass::where('id', $hcp_disease['parent_id'])->first();
                if($find_disease != null){
                    $disease = new DiseaseClass;
                    $disease->disease_code = $hcp_disease['disease_code'];
                    $disease->description = $hcp_disease['description'];
                    $disease->user_operator_id = auth()->user()->id;
                    $disease->user_type = auth()->user()->userable->id;
                    $disease->parent_id = $hcp_disease['parent_id'];
                    $disease->save();
                }
            }
        }

        Session::flash('success', 'The disease has been added');
        return redirect()->route('hmo-drugs.index'); 
    }

    public function show()
    {
    	$disease = DiseaseClass::findOrFail($id);
        return view('dashboard.hmo.diseases.show')
    			->with('classes', $classes);
    }

    public function edit()
    {
    	$disease = DiseaseClass::findOrFail($id);
        return view('dashboard.hmo.diseases.edit')
    			->with('classes', $classes); 
    }

    public function update()
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
