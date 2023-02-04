<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;

class Disbursement extends Model
{

    protected $guarded = [];
    
    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function disbursementable()
    {
    	return $this->morphTo();
    }

    public function hcp()
    {
        return $this->belongsTo(Hcp::class);
    }
}
