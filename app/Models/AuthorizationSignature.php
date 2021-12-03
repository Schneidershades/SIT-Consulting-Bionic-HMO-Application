<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorizationSignature extends Model
{
    public function signable()
    {
    	return $this->morphTo();
    }

    public function organizationable()
    {
    	return $this->morphTo();
    }
}
