<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HcpTransfer extends Model
{
    public function transferrable()
    {
        return $this->morphTo();
    }
}
