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
        $this->call(TariffTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(HmosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HcpsTableSeeder::class);
        $this->call(HmosTableSeeder::class);
        $this->call(HealthCarePlanTableSeeder::class);
        $this->call(CashTypeTableSeeder::class);
        $this->call(CashClassificationTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserPermissionTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->call(HmoHcpTableSeeder::class);
        $this->call(EnrolleesTableSeeder::class);
        $this->call(DiseaseClassesTableSeeder::class);
    }
}
