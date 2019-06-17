<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hmo;
use App\Models\Hcp;

class Agreement extends Model
{
	public function agreementable()
    {
        return $this->morphTo();
    }
    
    public function hmo()
    {
    	return $this->belongsTo(Hmo::class);
    }

    public function hcp()
    {
    	return $this->belongsTo(Hcp::class);
    }
}
