<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Staff;

class StaffBenefit extends Model
{

    protected $guarded = [];
    
    public function staff()
    {
    	return $this->belongsto(Staff::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
