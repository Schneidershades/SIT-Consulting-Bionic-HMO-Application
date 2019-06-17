<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
    		'name'=> 'view assessments',
    	]);

    	Permission::create([
    		'name'=> 'edit assessments',
    	]);

    	Permission::create([
    		'name'=> 'delete assessments',
    	]);

    	Permission::create([
    		'name'=> 'create assessments',
    	]);

    	Permission::create([
    		'name'=> 'view bills',
    	]);

    	Permission::create([
    		'name'=> 'edit bills',
    	]);

    	Permission::create([
    		'name'=> 'delete bills',
    	]);

    	Permission::create([
    		'name'=> 'create bills',
    	]);

    	Permission::create([
    		'name'=> 'view bills',
    	]);

    	Permission::create([
    		'name'=> 'verify bills',
    	]);

    	Permission::create([
    		'name'=> 'verify claims',
    	]);

    	Permission::create([
    		'name'=> 'verify disbursments',
    	]);

    	Permission::create([
    		'name'=> 'verify data',
    	]);

        Permission::create([
            'name'=> 'view pending data',
        ]);

        Permission::create([
            'name'=> 'view rejecting data',
        ]);

        Permission::create([
            'name'=> 'view processing data',
        ]);

    	Permission::create([
    		'name'=> 'delete bills',
    	]);

    	Permission::create([
    		'name'=> 'create bills',
    	]);

    	Permission::create([
    		'name'=> 'view capitations',
    	]);

    	Permission::create([
    		'name'=> 'edit capitations',
    	]);

    	Permission::create([
    		'name'=> 'delete capitations',
    	]);

    	Permission::create([
    		'name'=> 'create capitations',
    	]);

    	Permission::create([
    		'name'=> 'view cash',
    	]);

    	Permission::create([
    		'name'=> 'edit cash',
    	]);

    	Permission::create([
    		'name'=> 'delete cash',
    	]);

    	Permission::create([
    		'name'=> 'create cash',
    	]);

    	Permission::create([
    		'name'=> 'view claims',
    	]);

    	Permission::create([
    		'name'=> 'edit claims',
    	]);

    	Permission::create([
    		'name'=> 'delete claims',
    	]);

    	Permission::create([
    		'name'=> 'create claims',
    	]);

    	Permission::create([
    		'name'=> 'view encounters',
    	]);

    	Permission::create([
    		'name'=> 'edit encounters',
    	]);

    	Permission::create([
    		'name'=> 'delete encounters',
    	]);

    	Permission::create([
    		'name'=> 'create encounters',
    	]);

    	Permission::create([
    		'name'=> 'view enrollees',
    	]);

    	Permission::create([
    		'name'=> 'edit enrollees',
    	]);

    	Permission::create([
    		'name'=> 'delete enrollees',
    	]);

    	Permission::create([
    		'name'=> 'create enrollees',
    	]);

    	Permission::create([
    		'name'=> 'view hcps',
    	]);

    	Permission::create([
    		'name'=> 'edit hcps',
    	]);

    	Permission::create([
    		'name'=> 'delete hcps',
    	]);

    	Permission::create([
    		'name'=> 'create hcps',
    	]);

    	Permission::create([
    		'name'=> 'view health-care-plan',
    	]);

    	Permission::create([
    		'name'=> 'edit health-care-plan',
    	]);

    	Permission::create([
    		'name'=> 'delete health-care-plan',
    	]);

    	Permission::create([
    		'name'=> 'create health-care-plan',
    	]);

    	Permission::create([
    		'name'=> 'view staff',
    	]);

    	Permission::create([
    		'name'=> 'edit staff',
    	]);

    	Permission::create([
    		'name'=> 'delete staff',
    	]);

    	Permission::create([
    		'name'=> 'create staff',
    	]);

    	Permission::create([
    		'name'=> 'view HMO users',
    	]);

    	Permission::create([
    		'name'=> 'edit HMO users',
    	]);

    	Permission::create([
    		'name'=> 'delete HMO users',
    	]);

    	Permission::create([
    		'name'=> 'create HMO users',
    	]);

        Permission::create([
            'name'=> 'create HCP users',
        ]);

    }
}
