<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // Check if admin already exists
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'password', // Auto-hashed because of model's casts
                // 'email_verified_at' => now(),
            ]
        );
    }
}
