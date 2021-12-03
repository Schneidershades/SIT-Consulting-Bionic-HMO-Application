<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\HealthCarePlan;
use App\Models\Enrollee;
use App\Models\Hcp;
use App\Models\User;
use App\Models\Staff;
use App\Models\Capitation;
use App\Models\Bill;
use App\Models\Agreement;
use App\Models\HcpTransfer;

class Hmo extends Model
{

    protected $guarded = [];
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'hMo-aCt'.uniqid(true);
        });
    }
    public function healthCarePlans()
    {
    	return $this->hasMany(HealthCarePlan::class);
    }

    public function enrollees()
    {
    	return $this->hasMany(Enrollee::class);
    }

    public function hcps()
    {
    	return $this->belongsToMany(Hcp::class, 'hmo_hcp');
    }  

    public function user()
    {
        return $this->morphMany(User::class, 'userable');
    }  


    public function staff()
    {
        return $this->morphMany(Staff::class, 'staffable');
    } 

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function capitations()
    {
        return $this->hasMany(Capitation::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }

    public function transfer()
    {
        return $this->morphMany(HcpTransfer::class, 'transferrable');
    }

    public function branches()
    {
        return $this->hasMany(Hmo::class, 'parent_hmo_id');
    }

    public function headOffice()
    {
        return $this->belongsTo(Hmo::class);
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function approvalStatus($permission, $hmo_id, $signable_type, $signable_id)
    {

        $checkRole = Role::where('roleable_type', 'hmo')
            ->where('roleable_id', $hmo_id)
            ->pluck('id')
            ->toArray();

        $checkPermission = Permission::where('permissionable_type', 'hmo')
            ->where('permissionable_id', $hmo_id)
            ->where('name', $permission)->first();

        if($checkRole == null){
            return 'No Role';
        }

        $rolePermission = RolePermission::whereIn('role_id', $checkRole)
            ->where('permission_id', $checkPermission->id)
            ->pluck('role_id')->toArray();
        
        if($rolePermission==null){
            return 'no permission';
        }

        $userRoles = UserRole::whereIn('role_id', $rolePermission)
            ->pluck('id')
            ->toArray();

        $userRolesCount = UserRole::whereIn('role_id', $rolePermission)->get();

        // dd($userRoles);
       
        if($userRoles == null){
            return 'no user role';
        }

        $findSignature = AuthorizationSignature::whereIn('operator_user_id', $userRoles)
            ->where('signable_type', $signable_type)
            ->where('signable_id', $signable_id)
            ->where('organizationable_type', 'hmo')
            ->where('organizationable_id', $hmo_id)
            ->get();

        // dd($findSignature);

        if($findSignature==null){
            return 0;
        }

        return $findSignature->count() .'/'. $userRolesCount->count();
        // return 'good';
    }
}
