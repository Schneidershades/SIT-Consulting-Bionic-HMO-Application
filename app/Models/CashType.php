<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CashTransaction;

class CashType extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'cAsHtYpe'.uniqid(true);
        });
    }

    public function cashTransaction()
    {
    	return $this->belongsTo(CashTransaction::Class);
    }
}
