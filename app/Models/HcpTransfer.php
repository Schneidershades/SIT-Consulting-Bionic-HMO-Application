<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Hcp;
use App\Models\Enrollee;
use App\Models\Hmo;

class HcpTransfer extends Model
{

    protected $guarded = [];
    
    public function transferrable()
    {
        return $this->morphTo();
    }

    public function transferFrom()
    {
    	return $this->belongsTo(Hcp::class, 'transfer_from_hcp_id');
    }

    public function transferTo()
    {
    	return $this->belongsTo(Hcp::class, 'transfer_to_hcp_id');
    }

    public function enrollee()
    {
        return $this->belongsTo(Enrollee::class);
    }

    public function hmo()
    {
        return $this->belongsTo(Hmo::class);
    }

    public function requestingUser()
    {
        return $this->belongsTo(User::class, 'transferrable');
    }

    public function approvingUser()
    {
        return $this->belongsTo(User::class, 'transferrable');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
