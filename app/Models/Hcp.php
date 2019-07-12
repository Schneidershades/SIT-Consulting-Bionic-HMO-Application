<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\User;
use App\Models\Staff;
use App\Models\Hmo;
use App\Models\Assessment;
use App\Models\Capitation;
use App\Models\Encounter;
use App\Models\Agreement;
use App\Models\HcpTransfer;

class Hcp extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'hCp'.uniqid(true);
        });
    }

    public function hmos()
    {
    	return $this->belongsToMany(Hmo::class, 'hmo_hcp');
    }

    public function user()
    {
        return $this->morphMany(User::class, 'userable');
    }  

    public function staff()
    {
        return $this->morphMany(Staff::class, 'staffable');
    } 

    public function enrollees()
    {
        return $this->hasMany(Enrollee::class);
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

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }

    public function hasAccount($id)
    {
        $user = User::where('userable_id', $id)->where('userable_type', 'hcp')->first();
        if($user != null){
            return 'yes';
        }
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }

    public function specificHmoAgreements()
    {
        return $this->hasMany(Agreement::class, 'hcp_id')->where('hmo_id', auth()->user()->userable->id);
    }
    
    public function transfer()
    {
        return $this->morphMany(HcpTransfer::class, 'transferrable');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
