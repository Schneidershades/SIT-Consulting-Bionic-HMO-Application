<?php

namespace App\Http\Controllers\HCP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Encounter;
use App\Models\EncounterCategory;
use Session;

class EncounterController extends Controller
{
    public function index()
    {
        return view('dashboard.hcp.encounter.index')
                ->with('encounters', Encounter::where('hcp_id', auth()->user()->userable->id)->get()); 
    }

    public function create()
    {
        return view('dashboard.hcp.encounter.create')
            ->with('categories', EncounterCategory::all());
    }

    public function store(Request $request)
    {
        // dd($request->all());
        foreach($request->hcp_encounter_details as $e){
            if($e['category'] != null && $e['category_id'] == null){
                $checkCategory = EncounterCategory::where('name', $e['category'])->where('slug',  str_slug($e['category']))->first();
                if($checkCategory == null){
                    $category = new EncounterCategory;
                    $category->name =  $e['category'];
                    $category->slug =  str_slug($e['category']);
                    $category->save();
                    $cat_id = $category->id;
                }else{
                    $cat_id = $checkCategory->id;
                }
            }else{
                $checkCategory = EncounterCategory::where('id', $e['category_id'])->first();
                $cat_id = $checkCategory->id;
            }
            $checkEncounter = Encounter::where('encounter_category_id', $e['category_id'])
                    ->where('encounter_category_id', $cat_id)
                    ->where('hcp_id', auth()->user()->userable->id)
                    ->where('year', $e['year'])
                    ->where('month', $e['month'])->first();

            if($checkEncounter == null){
                $encounter = new Encounter;
                $encounter->hcp_id = auth()->user()->userable->id;
                $encounter->year = $e['year'];
                $encounter->month = $e['month'];
                $encounter->lives = $e['lives'];
                $encounter->encounter_category_id = $cat_id;
                $encounter->operator_id = auth()->user()->userable->id;
                $encounter->save(); 
            }else{
                Session::flash('info', 'You cannot add record to status again wait till next month');
                return redirect()->back();
            }
        }

        Session::flash('success', 'The encounter detail was sucessfully saved');
        return redirect()->route('hcp-encounters.index');

    }

    public function show($id)
    {
        return view('dashboard.hcp.encounter.show')
                ->with('encounter', Encounter::find($id));
    }

    public function edit($id)
    {
        return view('dashboard.hcp.encounter.edit')
                ->with('encounter', Encounter::find($id));
    }

    public function update(Request $request, $id)
    {
        $encounter =  Encounter::find($id);
        Session::flash('success', 'The encounter was sucessfully updated');
        return redirect()->back();
    }

    // public function destroy($id)
    // {
    //     $encounter =  Encounter::find($id);
    //     Session::flash('success', 'The encounter was sucessfully deleted');
    //     return redirect()->route('bills.index');
    // }
}
