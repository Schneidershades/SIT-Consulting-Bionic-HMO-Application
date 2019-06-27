<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CashTransaction;

class CashClassification extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'cAsHcLaSs'.uniqid(true);
        });
    }

    public function cashTransaction()
    {
    	return $this->belongsTo(CashTransaction::Class);
    }
}