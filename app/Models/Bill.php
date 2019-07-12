<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Hcp;
use App\Models\Hmo;
use App\Models\Enrollee;
use App\Models\TariffDrugTransaction;

class Bill extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'bIlL'.uniqid(true);
        });
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function hmo()
    {
        return $this->belongsTo(Hmo::class);
    }

    public function enrollee()
    {
        return $this->belongsTo(Enrollee::class);
    }

    public function transactions()
    {
        return $this->hasMany(TariffDrugTransaction::class, 'bill_id');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

}
