<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HcpTransfer;

class HcpTransferController extends Controller
{
    public function index()
    {
    	$transfers = HcpTransfer::all();
    	return $transfers;
    }

    public function create()
    {

    }

    public function store()
    {
    	$transfer = new HcpTransfer;
    	$transfer->save();
    }

    public function edit($id)
    {
    	$transfer = HcpTransfer::find($id);
    }

    public function rejectRequest($id)
    {
    	$transfer = HcpTransfer::find($id);
    }

    public function approveRequest($id)
    {
    	$transfer = HcpTransfer::find($id);
    }

}
