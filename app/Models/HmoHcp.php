<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hmo;
use App\Models\Hcp;
use App\Models\User;
use App\Models\Enrollee;

class HmoHcp extends Model
{
    protected $table = "hmo_hcp";

    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function hasAccount($id)
    {
    	$user = User::where('userable_id', $id)->where('userable_type', 'hcp')->first();
    	if($user != null){
    		return 'yes';
    	}
    }

    public function countHcpEnrollees($id){
        return $countEnrollees = Enrollee::where('hcp_id', auth()->user()->userable->id)->where('hmo_id', $id)->count();
    }


    public function countHmoEnrollees($id){
        return $countEnrollees = Enrollee::where('hmo_id', auth()->user()->userable->id)->where('hcp_id', $id)->count();
    }
}
