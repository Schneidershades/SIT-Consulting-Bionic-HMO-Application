<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Hcp;
use App\Models\Hmo;

class Assessment extends Model
{
    protected $guarded = [];

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

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
