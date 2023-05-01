<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'username' => 'Susanso',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('87654321'),
            'name' => 'Susanso',
            'NIP' => 101029304,
            'gender' => 'Male',
            'jabatan' => 'atasan',
        ]);

        DB::table('users')->insert([
            'username' => 'Bpk. Sutejo',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('87654321'),
            'name' => 'Bpk. Sutejo',
            'NIP' => 101029304,
            'gender' => 'Male',
            'jabatan' => 'atasan',
        ]);

    }
}
