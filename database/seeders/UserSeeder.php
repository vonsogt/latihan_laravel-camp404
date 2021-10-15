<?php

namespace Database\Seeders;

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
            'name' =>       'PakGuru',
            'role' =>       'admin',
            'email' =>      'admin@sma404.com',
            'password' =>   bcrypt('password123'),
        ]);
        DB::table('users')->insert([
            'name' =>       'Andi Saputra',
            'role' =>       'siswa',
            'student_id' => 1,
            'email' =>      'andi@sma404.com',
            'password' =>   bcrypt('password123'),
        ]);
        DB::table('users')->insert([
            'name' =>       'Budi Cahya',
            'role' =>       'siswa',
            'student_id' => 2,
            'email' =>      'budi@sma404.com',
            'password' =>   bcrypt('password123'),
        ]);
    }
}
