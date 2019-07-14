<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Permissions\HasPermissionsTrait;

class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userable()
    {
        return $this->morphTo();
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function hcpSignReport($user, $document, $content)
    {

        $findSignature = AuthorizationSignature::where('operator_user_id', $user)
            ->where('signable_type', $document)
            ->where('signable_id', $content->id)
            ->where('organizationable_type', 'hcp')
            ->where('organizationable_id', $content->hcp_id)
            ->first();

        if($findSignature == null){
            $message = 'pending';
        }

        if($findSignature != null && $findSignature->action == 'accepted'){
            $message = 'accepted';
        }

        if($findSignature != null && $findSignature->action == 'rejected'){
            $message = 'rejected';
        }

        return $message;
    }
}
