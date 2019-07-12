<?php

namespace App\Http\Controllers\HCP;

use App\Http\Helpers\FunctionHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enrollee;
use App\Models\HealthCarePlan;
use App\Models\Hmo;
use App\Models\HmoHcp;
use App\Models\HcpTransfer;
use Session;

class EnrolleeController extends Controller
{

    public function index()
    {
        $enrollees = Enrollee::where('hcp_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.enrollees.index')
                ->with('enrollees', $enrollees); 
    }

    public function show($id)
    {
        return view('dashboard.hcp.enrollees.show')
                ->with('enrollee', Enrollee::find($id));
    }

    public function allTransfers()
    {
        $transfers = HcpTransfer::where('transfer_to_hcp_id', auth()->user()->userable->id)
                    ->orwhere('transfer_from_hcp_id', auth()->user()->userable->id)->get();
        return view('dashboard.hcp.enrollees.transfers')
                ->with('transfers', $transfers); 
    }

    public function pendingIncomingTransferRequest()
    {
        $transfers = HcpTransfer::where('transfer_to_hcp_id', auth()->user()->userable->id)->where('check_in_transfer_to_hcp_status', 'pending')->get();
        return view('dashboard.hcp.enrollees.incoming_transfer')
                ->with('transfers', $transfers); 
    }

    public function verifyCheckinIncomingTransferRequest($id)
    {
        $transfer = HcpTransfer::find($id);
        $transfer->check_in_transfer_to_hcp_status = 'verified';
        $transfer->hcp_check_in_transfer_user_id = auth()->user()->id;
        $transfer->save();

        $enrollee = $transfer->enrollee();
        $enrollee->hcp_id = $transfer->transfer_to_hcp_id;
        $enrollee->save();
        return redirect()->back(); 
    }

    public function pendingOutgoingTransferRequest()
    {
        $transfers = HcpTransfer::where('transfer_to_hcp_id', auth()->user()->userable->id)->where('check_in_transfer_to_hcp_status', 'pending')->get();
        return view('dashboard.hcp.enrollees.outgoing_transfer')
                ->with('transfers', $transfers); 
    }

    public function showTransferInfo($id)
    {
        $transfers = HcpTransfer::where('id', $id)->get();
        return view('dashboard.hcp.enrollees.transfer_show')
                ->with('transfers', $transfers); 
    }
    
}
