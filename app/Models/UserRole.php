<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;

class UserRole extends Model
{
    protected $table = "users_roles";

    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }
}
