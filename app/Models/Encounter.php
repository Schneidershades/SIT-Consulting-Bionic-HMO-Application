<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\EncounterCategory;
use App\Models\Hcp;

class Encounter extends Model
{
	protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'eNcOuNtEr'.uniqid(true);
        });
    }

    public function encounterCategory()
    {
    	return $this->belongsTo(EncounterCategory::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
