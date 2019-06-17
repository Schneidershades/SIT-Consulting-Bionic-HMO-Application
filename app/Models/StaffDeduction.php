<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;

class StaffDeduction extends Model
{
    public function staff()
    {
    	return $this->belongsto(Staff::class);
    }
}
