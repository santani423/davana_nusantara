<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_pakets')->insert([
            ['name' => 'Umum', 'code' => 'Umum'],
            ['name' => 'VIP', 'code' => 'VIP'],
            ['name' => 'VVIP', 'code' => 'VVIP'],
            ['name' => 'Khusus', 'code' => 'Khusus'],
            ['name' => 'Premium', 'code' => 'Premium'],
        ]);
    }
}
