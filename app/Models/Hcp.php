<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\User;
use App\Models\Staff;
use App\Models\Hmo;
use App\Models\Assessment;
use App\Models\Capitation;
use App\Models\Encounter;
use App\Models\Agreement;
use App\Models\HcpTransfer;
use App\Models\Permission;
use App\Models\RolePermission;

class Hcp extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'hCp'.uniqid(true);
        });
    }

    public function hmos()
    {
    	return $this->belongsToMany(Hmo::class, 'hmo_hcp');
    }

    public function user()
    {
        return $this->morphMany(User::class, 'userable');
    }  

    public function staff()
    {
        return $this->morphMany(Staff::class, 'staffable');
    } 

    public function enrollees()
    {
        return $this->hasMany(Enrollee::class);
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

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }

    public function hasAccount($id)
    {
        $user = User::where('userable_id', $id)->where('userable_type', 'hcp')->first();
        if($user != null){
            return 'yes';
        }
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }

    public function specificHmoAgreements()
    {
        return $this->hasMany(Agreement::class, 'hcp_id')->where('hmo_id', auth()->user()->userable->id);
    }
    
    public function transfer()
    {
        return $this->morphMany(HcpTransfer::class, 'transferrable');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }

    public function approvalStatus($permission, $hcp_id, $signable_type, $signable_id)
    {

        $checkRole = Role::where('roleable_type', 'hcp')
            ->where('roleable_id', $hcp_id)
            ->pluck('id')
            ->toArray();

        $checkPermission = Permission::where('permissionable_type', 'hcp')
            ->where('permissionable_id', $hcp_id)
            ->where('name', $permission)->first();

        if($checkRole == null){
            return 'No Role';
        }

        $rolePermission = RolePermission::whereIn('role_id', $checkRole)
            ->where('permission_id', $checkPermission->id)
            ->pluck('role_id')->toArray();
        
        if($rolePermission==null){
            return 'not permission';
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
            ->where('organizationable_type', 'hcp')
            ->where('organizationable_id', $hcp_id)
            ->get();

        // dd($findSignature);

        if($findSignature==null){
            return 0;
        }

        return $findSignature->count() .'/'. $userRolesCount->count();
        // return 'good';
    }

    public function showApprovalStatus($permission, $hcp_id, $signable_type, $signable_id)
    {
        $checkRole = Role::where('roleable_type', 'hcp')
            ->where('roleable_id', $hcp_id)
            ->pluck('id')
            ->toArray();

        $checkPermission = Permission::where('permissionable_type', 'hcp')
            ->where('permissionable_id', $hcp_id)
            ->where('name', $permission)->first();

        if($checkRole == null){
            return false;
        }

        $rolePermission = RolePermission::whereIn('role_id', $checkRole)
            ->where('permission_id', $checkPermission->id)
            ->pluck('role_id')->toArray();
        
        if($rolePermission==null){
            return false;
        }

        $userRoles = UserRole::whereIn('role_id', $rolePermission)
            ->pluck('id')
            ->toArray();

        $userApprovalRoles = UserRole::whereIn('role_id', $rolePermission)->get();

        // dd($userRoles);
       
        // if($userRoles == null){
        //     return 'no user role';
        // }

        // $findSignature = AuthorizationSignature::whereIn('operator_user_id', $userRoles)
        //     ->where('signable_type', $signable_type)
        //     ->where('signable_id', $signable_id)
        //     ->where('organizationable_type', 'hcp')
        //     ->where('organizationable_id', $hcp_id)
        //     ->get();

        // $SignatureAccepted = AuthorizationSignature::whereIn('operator_user_id', $userRoles)
        //     ->where('signable_type', $signable_type)
        //     ->where('signable_id', $signable_id)
        //     ->where('action', 'accepted')
        //     ->where('organizationable_type', 'hcp')
        //     ->where('organizationable_id', $hcp_id)
        //     ->get();

        // $SignatureRejected = AuthorizationSignature::whereIn('operator_user_id', $userRoles)
        //     ->where('signable_type', $signable_type)
        //     ->where('signable_id', $signable_id)
        //     ->where('action', 'rejected')
        //     ->where('organizationable_type', 'hcp')
        //     ->where('organizationable_id', $hcp_id)
        //     ->get();

        // // dd($findSignature);

        // if($findSignature==null){
        //     return 0;
        // }

        // $approvals = [
        //     'accepted' => $SignatureAccepted,
        //     'rejected' => $SignatureRejected,
        // ]
        return $userApprovalRoles;
        // return 'good';
    }

}
