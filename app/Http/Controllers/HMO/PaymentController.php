<?php

namespace App\Http\Controllers\HMO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;

class PaymentController extends Controller
{
    public function create()
    {
        return view('dashboard.hmo.payments.edit');
    }

    public function store(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->hmo_payment_gateway = $request->hmo_payment_gateway;
        $user->hcp_payment_api_public_key_sandbox = $request->hcp_payment_api_public_key_sandbox;
        $user->hcp_payment_api_private_key_sandbox = $request->hcp_payment_api_private_key_sandbox;
        $user->hcp_payment_api_public_key_live = $request->hcp_payment_api_public_key_live; 
        $user->hcp_payment_api_private_key_live = $request->hcp_payment_api_private_key_live;
        $user->save();
        return redirect()->back();
    }

}
