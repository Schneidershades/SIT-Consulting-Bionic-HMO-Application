<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;

class EnrolleeServiceAlert extends Model
{

    protected $guarded = [];
    
    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
