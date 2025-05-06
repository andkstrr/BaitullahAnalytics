<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // pastikan import model User
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'tes',
            'role' => 'admin',
            'email' => 'tes@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
