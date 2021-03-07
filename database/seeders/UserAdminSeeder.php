<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'username' => 'admin',
            'user_type' => 'Admin',
            'password' => Hash::make('southernleyte'),
        ]);
    }
}
