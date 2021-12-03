<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\HealthCarePlan;

class HealthCarePlanBenefit extends Model
{

    protected $guarded = [];
    
    public function plan()
    {
        return $this->belongsTo(HealthCarePlan::class);
    }
    
    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
