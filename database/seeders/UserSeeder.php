<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Clear user table (optional, aman saat migrate:fresh --seed)
        // User::truncate();

        // Create secure admin user
        // User::create([
        //     'name' => 'Administrator - Radit',
        //     'email' => 'raditjal717@gmail.com',
        //     'password' => Hash::make('Radit717@'),
        //     'role' => 'admin',
        // ]);
    }
}
