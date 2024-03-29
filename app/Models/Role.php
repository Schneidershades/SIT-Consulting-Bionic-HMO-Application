<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Permission;

class Role extends Model
{

    protected $guarded = [];
    
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function roleable()
    {
    	return $this->morphTo();
    }
}
