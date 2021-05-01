<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => '2021-04-29 12:13:43',
            'created_at' => '2021-04-29 12:13:43',
            'updated_at' => '2021-04-29 12:13:43',
            'role' => 'admin',
        ]);//
    }
}