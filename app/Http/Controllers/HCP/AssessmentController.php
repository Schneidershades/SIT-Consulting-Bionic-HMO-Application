<?php

namespace App\Http\Controllers\HCP;

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
        $assessments = Assessment::where('hcp_id' ,auth()->user()->userable->id)->latest();
        return view('dashboard.hcp.assessments.index')->with('assessments', $assessments); 
    }

    public function show($id)
    {
        $assessment = Assessment::find($id);
        return view('dashboard.hcp.assessments.show')
                ->with('assessment', $assessment);
    }

    public function edit($id)
    {
        $assessment = Assessment::find($id);
        return view('dashboard.hcp.assessments.edit')
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
}
