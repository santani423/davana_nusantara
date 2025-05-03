<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OurCleanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('our_cleans')->insert([
            [
                'name' => 'CleanMaster',
                'img' => 'uploads/our_clean/cleanmaster.jpg',
                'company' => 'PT Clean Master Indonesia',
                'contact_person' => 'Dina Ramadhani',
                'email' => 'dina@cleanmaster.id',
                'phone' => '081234567890',
                'address' => 'Jl. Kebersihan No. 1, Jakarta',
                'is_active' => 1,
                'notes' => 'Perusahaan jasa kebersihan gedung dan perkantoran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CleanUp Pro',
                'img' => 'uploads/our_clean/cleanuppro.jpg',
                'company' => 'CV Bersih Sejahtera',
                'contact_person' => 'Adi Nugroho',
                'email' => 'adi@cleanuppro.co.id',
                'phone' => '082112345678',
                'address' => 'Jl. Proklamasi No. 99, Bandung',
                'is_active' => 1,
                'notes' => 'Ahli dalam kebersihan industri dan rumah sakit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
