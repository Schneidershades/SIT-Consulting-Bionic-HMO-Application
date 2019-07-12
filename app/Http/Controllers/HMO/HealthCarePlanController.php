<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HealthCarePlan;
use App\Models\HealthCarePlanBenefit;
use App\Models\HealthCarePlannable;
use App\Models\Tariff;
use App\Models\Drug;
use Session;

class HealthCarePlanController extends Controller
{

    public function index()
    {
        $plans = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('parent_id', '=', NULL)->get();
        return view('dashboard.hmo.health-plan.index')
                ->with('plans', $plans); 
    }

    public function create()
    {
        $plans = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('amount', '=', 0)->get();
        $tariffs = Tariff::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();
        $drugs = Drug::where('amount', '!=', 0)->where('parent_id', '!=' , NULL)->get();;
        return view('dashboard.hmo.health-plan.create')
                ->with('tariffs', $tariffs)
                ->with('drugs', $drugs)
                ->with('parent_plans', $plans);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $plan = new HealthCarePlan;
        $plan->hmo_id = auth()->user()->userable->id;
        $plan->plan = $request->plan;
        $plan->amount = $request->amount;
        $plan->parent_id = $request->parent_id ? $request->parent_id : null;
        $plan->save();

        if($request->tariffs){
            $tariffs = Tariff::whereIn('id', $request->tariffs)->get();
            foreach ($tariffs as $tariff) {
                $tariff->healthPlannable()->attach($plan);
            }            
        }

        if($request->drugs){
            $drugs = Drug::whereIn('id', $request->drugs)->get();
            foreach ($drugs as $drug) {
                $drug->healthPlannable()->attach($plan);
            }
    	}

        if($request->health_care_benefits_details){
             $plan_benefits = new HealthCarePlanBenefit;
            foreach($request->health_care_benefits_details as $benefits_details){
                $plan_benefits['benefit'] = $benefits_details['benefit'];
                $plan->benefits()->save($plan_benefits);
            }
        }
        Session::flash('success', 'The Health care plan was sucessfully recorded');
        return redirect()->route('plans.index');

    }

    public function show($id)
    {
        $plan = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('id', $id)->first();
        $plannables = HealthCarePlannable::where('health_care_plan_id', $id)->get(); 
        return view('dashboard.hmo.health-plan.show')
            ->with('plannables', $plannables)
            ->with('plan', $plan);
    }

    public function edit($id)
    {
        $plan = HealthCarePlan::where('hmo_id', auth()->user()->userable->id)->where('id', $id)->first();
        return view('dashboard.hmo.health-plan.edit')
            ->with('plan', $plan);
    }

    public function update(Request $request, $id)
    {
        $plan = HealthCarePlan::find($id);
        $plan->hmo_id = auth()->user()->userable->id;
        $plan->plan = $request->plan;
        $plan->amount = $request->amount;
        $plan->save();

        Session::flash('success', 'The Health care plan was sucessfully updated');
        return redirect()->route('plans.show', $plan->id);
    }

    public function destroy($id)
    {
        $plan = HealthCarePlan::find($id);
        $plan->delete();
        $plan->benefits()->delete();
        Session::flash('success', 'The Health care plan was sucessfully deleted');
        return redirect()->route('plans.index');
    }

    public function destroyDrugsOrTariffFeatures($id)
    {
        $feature = HealthCarePlannable::where('health_care_plannables_id', $id)->first();
        $feature->delete();
        Session::flash('success', 'The Health care coverage item was sucessfully deleted');
        return redirect()->back();
    }
}
