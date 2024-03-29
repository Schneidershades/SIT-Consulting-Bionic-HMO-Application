<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Role;

class Permission extends Model
{

    protected $guarded = [];
    
    public function roles()
    {
    	return $this->belongsToMany(Role::class, 'roles_permissions');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function permissionable()
    {
    	return $this->morphTo();
    }
}
