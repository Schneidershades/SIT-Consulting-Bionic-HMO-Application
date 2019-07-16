<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disbursement;

class DisbursementController extends Controller
{
    public function index()
    {
    	$disbursements = Disbursement::where('hmo_id', auth()->user()->userable->id)->get();
    	return view('dashboard.hmo.disbursements.index')
    		->with('disbursements', $disbursements);
    }

    public function pending()
    {
    	$disbursements = Disbursement::where('hmo_id', auth()->user()->userable->id)->where('hmo_signature_status', 'pending')->get();
    	return view('dashboard.hmo.disbursements.pending')
    		->with('disbursements', $disbursements);
    }

    public function verified()
    {
    	$disbursements = Disbursement::where('hmo_id', auth()->user()->userable->id)->where('hmo_signature_status', 'verified')->get();
    	return view('dashboard.hmo.disbursements.verified')
    		->with('disbursements', $disbursements);
    }

    public function show($id)
    {
    	$disbursement = Disbursement::findOrFail($id);
    	return view('dashboard.hmo.disbursements.verified')
    		->with('disbursement', $disbursement);
    }
    
}
