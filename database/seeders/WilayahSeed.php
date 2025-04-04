<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wilayahs')->insert([
            ['name' => 'Jakarta', 'code' => 'JKT'],
            ['name' => 'Bandung', 'code' => 'BDG'],
            ['name' => 'Surabaya', 'code' => 'SBY'],
            ['name' => 'Yogyakarta', 'code' => 'YGY'],
            ['name' => 'Medan', 'code' => 'MDN'],
        ]);
    }
}
