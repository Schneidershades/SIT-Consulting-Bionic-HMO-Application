<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Encounter;

class EncounterCategory extends Model
{

    protected $guarded = [];
    
	protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'cAtEgOrY-eNcOuNtEr'.uniqid(true);
        });
    }

    public function encounters()
    {
    	return $this->hasMany(Encounter::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
