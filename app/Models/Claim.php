<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Enrollee;
use App\Models\Hmo;
use App\Models\Hcp;

class Claim extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'claim'.uniqid(true);
        });
    }


    public function claimable()
    {
        return $this->morphTo();
    } 

    public function enrollee()
    {
    	return $this->belongsTo(Enrollee::class);
    }

    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function bill()
    {
    	return $this->belongsTo(Bill::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
