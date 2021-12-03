<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Hmo;
use App\Models\Hcp;

class Agreement extends Model
{

    protected $guarded = [];
    
	public function agreementable()
    {
        return $this->morphTo();
    }
    
    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
