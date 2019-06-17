<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HealthCarePlan;

class HealthCarePlanBenefit extends Model
{
    public function plan()
    {
        return $this->belongsTo(HealthCarePlan::class);
    }
}
