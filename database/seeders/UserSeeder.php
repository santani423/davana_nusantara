<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Daffana Nusantara',
            'email' => 'daffanacv@gmail.com',
            'password' => Hash::make('password123'), // ganti dengan password aman 
        ]);
    }
}
