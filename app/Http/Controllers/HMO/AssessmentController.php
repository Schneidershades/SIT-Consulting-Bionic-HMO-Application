<?php

namespace App\Http\Controllers\HMO;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Assessment;
use App\Models\HmoHcp;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::where('hmo_id' ,auth()->user()->userable->id)->get();
        return view('dashboard.hmo.assessments.index')->with('assessments', $assessments); 
    }

    public function create()
    {
        $hcps = HmoHcp::where('hmo_id', auth()->user()->userable->id)->get();
        return view('dashboard.hmo.assessments.create')->with('hcps', $hcps);
    }

    public function store(Request $request)
    {
        $assessment = new Assessment;
        // dd($request->hcp_assessments_details);
        foreach($request->hcp_assessments_details as $assess){
            $assessment->remark = $assess['remark'];
            $assessment->recommendation = $assess['recommendation'];
            $assessment->hcp_id = $assess['hcp_id'];
            $assessment->hmo_id = auth()->user()->userable->id;
            $assessment->save(); 
        }
        
        Session::flash('success', 'The assessment was Sucessfully saved');
        return redirect()->route('assessments.index');
    }

    public function show($id)
    {
        $assessment = Assessment::find($id);
        return view('dashboard.hmo.assessments.show')
                ->with('assessment', $assessment);
    }

    public function edit($id)
    {
        $assessment = Assessment::find($id);
        return view('dashboard.hmo.assessments.edit')
                ->with('assessment', $assessment);
    }

    public function update(Request $request, $id)
    {
        $assessment = Assessment::find($id);
        $assessment->assessment_date = $request->assessment_date;
        $assessment->remarks = $request->remarks;
        $assessment->recommendation = $request->recommendation;
        $assessment->hcp_id = $request->hcp_id;
        $assessment->hmo_id = auth()->user()->userable->id;
        $assessment->save(); 

        Session::flash('success', 'The assessment was Sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $assessment = Assessment::find($id);
        $assessment->delete(); 
        Session::flash('success', 'The assessment was Sucessfully deleted');
        return redirect()->route('assessments.index');
    }
}
