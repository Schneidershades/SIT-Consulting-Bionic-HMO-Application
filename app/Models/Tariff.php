<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TariffDrugTransaction;
use App\Models\Agreement;
use App\Models\HealthCarePlan;

class Tariff extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($walletfund){
            $walletfund->identifier = 'tAriFf-aCt'.uniqid(true);
        });
    }

    public function serviceItems()
    {
        return $this->morphMany(TariffDrugTransaction::class, 'hospitable');
    } 

    public function tariffAgreements()
    {
        return $this->morphMany(Agreement::class, 'agreementable');
    }

    public function getTitle()
    {
        return $this->tariff_code .' '. $this->description;
    }

    public function healthPlannable()
    {
        return $this->morphToMany(HealthCarePlan::class, 'health_care_plannables');
    }
}
