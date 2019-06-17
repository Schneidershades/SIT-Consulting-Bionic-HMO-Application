<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hcp;
use App\Models\Hmo;

class Assessment extends Model
{
	protected static function boot()
    {
    	parent::boot();

    	static::creating(function($walletfund){
    		$walletfund->identifier = 'aSeSsMeNt'.uniqid(true);
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


}
