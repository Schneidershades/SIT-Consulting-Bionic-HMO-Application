<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;

class AuthorizationSignature extends Model
{
    public function signable()
    {
    	return $this->morphTo();
    }
}
