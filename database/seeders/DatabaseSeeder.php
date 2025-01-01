<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); // Jika ingin membuat pengguna acak

        // Membuat pengguna utama untuk login
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'), // Pastikan menggunakan bcrypt untuk mengenkripsi password
        ]);

        // Membuat pengguna tambahan lainnya
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('testpassword'), // Password untuk login
        ]);
    }
}