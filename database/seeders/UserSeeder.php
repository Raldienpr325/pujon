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
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678'),
            'name' => 'pegawai',
            'NIP' => 101029304,
            'gender' => 'L',
            'jabatan' => 'pegawai',
        ]);

        DB::table('users')->insert([
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('87654321'),
            'name' => 'atasan',
            'NIP' => 101029304,
            'gender' => 'L',
            'jabatan' => 'atasan',
        ]);

        DB::table('users')->insert([
            'username' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('iniadmin123'),
            'name' => 'admin',
            'NIP' => 101029304,
            'gender' => 'L',
            'jabatan' => 'admin',
        ]);
    }
}
