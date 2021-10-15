<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' =>       'Andi Saputra',
            'nis' =>        101,
            'birth_date' => '2003-12-22',
        ]);
        DB::table('students')->insert([
            'name' =>       'Budi Cahya',
            'nis' =>        102,
            'birth_date' => '2004-01-30',
        ]);
    }
}
