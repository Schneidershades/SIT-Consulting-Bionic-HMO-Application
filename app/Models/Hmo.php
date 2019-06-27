<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HealthCarePlan;
use App\Models\Enrollee;
use App\Models\Hmo;
use App\Models\Hcp;
use App\Models\User;
use App\Models\Staff;
use App\Models\Capitation;
use App\Models\Bill;
use App\Models\Agreement;
use App\Models\HcpTransfer;

class Hmo extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'hMo-aCt'.uniqid(true);
        });
    }
    public function healthCarePlans()
    {
    	return $this->hasMany(HealthCarePlan::class);
    }

    public function enrollees()
    {
    	return $this->hasMany(Enrollee::class);
    }

    public function hcps()
    {
    	return $this->belongsToMany(Hcp::class, 'hmo_hcp');
    }  

    public function user()
    {
        return $this->morphMany(User::class, 'userable');
    }  


    public function staff()
    {
        return $this->morphMany(Staff::class, 'staffable');
    } 

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function capitations()
    {
        return $this->hasMany(Capitation::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }

    public function transfer()
    {
        return $this->morphMany(HcpTransfer::class, 'transferrable');
    }
}
