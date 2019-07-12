<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\User;
use App\Models\Hmo;
use App\Models\HealthCarePlanBenefit;
use App\Models\Enrollee;
use App\Models\Tariff;
use App\Models\Drug;

class HealthCarePlan extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'hEaLtH-pLaN'.uniqid(true);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hmo()
    {
        return $this->belongsTo(Hmo::class);
    }

    public function subplan()
    {
        return $this->hasMany(HealthCarePlan::class);
    }

    public function parent()
    {
        return $this->belongsTo(HealthCarePlan::class, 'id');
    }

    public function benefits()
    {
    	return $this->hasMany(HealthCarePlanBenefit::class);
    }

    public function enrollees(){
        return $this->hasMany(Enrollee::class);
    }

    public function drugs()
    {
        return $this->morphedByMany(Drug::class, 'health_care_plannables');
    }

    public function tariffs()
    {
        return $this->morphedByMany(Tariff::class, 'health_care_plannables');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
