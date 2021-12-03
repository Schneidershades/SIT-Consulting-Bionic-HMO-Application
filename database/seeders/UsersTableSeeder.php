<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'ICT',
            'email' => 'info@admin.com',
            'password'  => bcrypt('password'),
            'operator_user_id' => 1,
            'verify_id' => 1,
            'userable_id' => 45,
            'userable_type' => 'hmo',
        ]);

        $user = User::create([
            'name' => 'Schneider Shades',
            'email' => 'admin@admin.com',
            'password'  => bcrypt('password'),
            'operator_user_id' => 1,
            'verify_id' => 1,
            'userable_id' => 4084,
            'userable_type' => 'hcp',
        ]);
    }
}
