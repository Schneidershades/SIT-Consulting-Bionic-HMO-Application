<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Hmo;
use App\Models\Hcp;
use App\Models\Staff;
use App\Models\Tariff;
use App\Models\Drug;
use App\Models\Enrollee;
use App\Models\Bill;
use App\Models\Capitation;

class EloquentServiceProvider extends ServiceProvider
{
    public function register()
    {
        Relation::morphMap([
            'hmo' => Hmo::class,
            'hcp' => Hcp::class,
            'staff' => Staff::class,
            'tariff' => Tariff::class,
            'drug' => Drug::class,
            'enrollee' => Enrollee::class,
            'bill' => Bill::class,
            'capitation' => Capitation::class,
        ]);
    }

    public function boot()
    {
        Relation::morphMap([
            'hmo' => Hmo::class,
            'hcp' => Hcp::class,
            'staff' => Staff::class,
            'tariff' => Tariff::class,
            'drug' => Drug::class,
            'enrollee' => Enrollee::class,
            'bill' => Bill::class,
            'capitation' => Capitation::class,
        ]);
    }
}
