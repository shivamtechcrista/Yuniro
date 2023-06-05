<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'direzione@selexi.it',
            'role' => 'ADMIN',
            'password' => Hash::make('Password'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
