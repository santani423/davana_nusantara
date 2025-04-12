<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder WilayahSeed
        $this->call(WilayahSeed::class);
        $this->call(itemDescSeeder::class);
        // $this->call(TypePaketSeeder::class);
        // $this->call(PaketSeeder::class);
        $this->call(BlogSeed::class);
        $this->call(Bannerseeder::class);

        $this->call(LdksSeeder::class);
        $this->call(paketStudySeeder::class);
        $this->call(WisataSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
