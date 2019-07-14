<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
    		'name'=> 'MD',
    	]);

    	Role::create([
    		'name'=> 'Accountant',
    	]);

    	Role::create([
    		'name'=> 'Data Entry',
    	]);

    	Role::create([
    		'name'=> 'Doctor',
    	]);

    	Role::create([
    		'name'=> 'Business Administration',
    	]);

    	Role::create([
    		'name'=> 'Human Resource',
    	]);

    	Role::create([
    		'name'=> 'Taxation',
    	]);

    	Role::create([
    		'name'=> 'Support',
    	]);
    }
}
