<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashTransaction extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'cAsH-tRaNsAcTiOn'.uniqid(true);
        });
    }
    
    public function dailyCashBookable()
    {
        return $this->morphTo();
    }
}
