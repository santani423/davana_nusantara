<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $id_wilayah = rand(1, 5);
            $id_type_paket = rand(1, 5);
            DB::table('pakets')->insert([
                'name' => 'Paket ' . $i,
                'code' => 'Paket ' . $i,
                'thumbnail_img' => 'assets/item/group126.png',
                'description' => 'Paket ' . $i . ' menawarkan pengalaman luar biasa dengan fasilitas terbaik.',
                'price' => rand(1000000, 10000000), // Harga acak antara 100,000 dan 1,000,000
                'wilayah_id' => $id_wilayah,
                'type_paket_id' => $id_type_paket,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
