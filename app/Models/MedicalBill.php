<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollee;
use App\Models\Hcp;

class MedicalBill extends Model
{
	protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'BiLl-aCt'.uniqid(true);
        });
    }

    public function enrollee()
    {
    	return $this->belongsTo(Enrollee::class);
    }

	public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }
}
