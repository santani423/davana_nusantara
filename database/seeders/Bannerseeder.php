<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bannerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) { 
           // Insert sample data into the banners table
        $bannerId = DB::table('banners')->insertGetId([
            'title' => 'Welcome to Davana Nusantara '.$i,
            'image_path' => 'assets/slide/slide.pngq    qq      ',
            'discover_more' => 'https://example.com/discover',
            'description' => 'Explore the beauty of Nusantara with us.',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert sample data into the sub_banner_images table
        DB::table('sub_banner_images')->insert([
            [
                'banner_id' => $bannerId,
                'path_img' => 'assets/slide/slide.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'banner_id' => $bannerId,
                'path_img' => 'assets/slide/slide.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'banner_id' => $bannerId,
                'path_img' => 'assets/slide/slide.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        }
    }
}
