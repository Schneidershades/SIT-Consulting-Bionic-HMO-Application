<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDrugTransaction extends Model
{
    public function hospitable()
    {
        return $this->morphTo();
    } 
}
