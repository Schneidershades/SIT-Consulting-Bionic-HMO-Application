<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HmosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(HcpsTableSeeder::class);
        $this->call(TariffTableSeeder::class);
        $this->call(HmosTableSeeder::class);
        $this->call(HealthCarePlanTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(CashTypeTableSeeder::class);
        $this->call(CashClassificationTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
