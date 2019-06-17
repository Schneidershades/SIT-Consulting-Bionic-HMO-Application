<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Encounter;

class EncounterCategory extends Model
{
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
}
