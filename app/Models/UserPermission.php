<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;

class UserPermission extends Model
{
    protected $table = "users_permissions";

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function permission()
    {
    	return $this->belongsTo(Permission::class);
    }
}
