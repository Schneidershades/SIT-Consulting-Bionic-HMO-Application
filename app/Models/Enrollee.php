<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hmo;
use App\Models\Dependant;
use App\Models\Hcp;
use App\Models\HealthCarePlan;
use App\Models\Bill;
use App\Models\Agreement;
use App\Models\HcpTransfer;

class Enrollee extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'eNrOlLeE'.uniqid(true);
        });
    }
    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function dependants()
    {
    	return $this->hasMany(Enrollee::class, 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Enrollee::class, 'parent_id');
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function health_care_plan()
    {
        return $this->belongsTo(HealthCarePlan::class, 'health_plan_id');
    }


    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function transfer()
    {
        return $this->morphMany(HcpTransfer::class, 'transferrable');
    }
}
