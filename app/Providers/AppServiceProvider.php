<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Bill;
use App\Models\Capitation;
use App\Models\Claim;
use App\Models\Enrollee;
use App\Models\HmoHcp;
use App\Models\Rate;
use App\Models\Tariff;
use App\Models\Drug;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // public static function boot()
        // {
        //     parent::boot();
        //     self::creating(function ($model) {
        //         $model->uuid = (string)Uuid::generate();
        //     });
        // }
        //         
    }
}
