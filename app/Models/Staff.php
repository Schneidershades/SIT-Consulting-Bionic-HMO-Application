<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Hmo;
use App\Models\StaffBenefit;
use App\Models\StaffPenalty;

class Staff extends Model
{

    protected $guarded = [];
    
	protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'sTaFf-aCt'.uniqid(true);
        });
    }

    public function staffable()
    {
        return $this->morphTo();
    } 

    public function staffBenefits()
    {
        return $this->hasMany(StaffBenefit::class);
    }

    public function staffPenalties()
    {
        return $this->hasMany(StaffPenalty::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
