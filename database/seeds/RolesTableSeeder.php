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
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Accountant',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Data Entry',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Doctor',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Business Administration',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Human Resource',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Taxation',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);

    	Role::create([
    		'name'=> 'Support',
            'roleable_type' => 'hmo',
            'roleable_id' => 1,
    	]);
    }
}
