<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AuthorizationSignature;
use App\Models\Claim;
use App\Models\Agreement;
use App\Models\HealthCarePlan;

class Drug extends Model
{
    public function drugItems()
    {
        return $this->morphMany(Claim::class, 'claimable');
    }
     

    public function drugAgreements()
    {
        return $this->morphMany(Agreement::class, 'agreementable');
    }

    public function getTitle()
    {
    	return $this->drug_name .' - '. $this->dosage_form .' '. $this->strengths .' '. $this->presentation;
    }

    public function healthPlannable()
    {
        return $this->morphToMany(HealthCarePlan::class, 'health_care_plannables');
    }

    public function approveSignature()
    {
        return $this->morphToMany(AuthorizationSignature::class, 'signable');
    }
}
