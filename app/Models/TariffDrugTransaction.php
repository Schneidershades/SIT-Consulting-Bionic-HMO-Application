<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollee;
use App\Models\Hmo;
use App\Models\Hcp;

class TariffDrugTransaction extends Model
{
    public function hospitable()
    {
        return $this->morphTo();
    } 

    public function enrollee()
    {
    	return $this->belongsTo(Enrollee::class);
    }

    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }

    public function bill()
    {
    	return $this->belongsTo(Bill::class);
    }
}
