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
        // Kepala Dapur
        \App\Models\User::factory()->create([
            'name' => 'Kepala Dapur',
            'email' => 'kepala@gmail.com',
            'password' => bcrypt('123'),
            'role' => 1,
        ]);

        // Admin Stok
        \App\Models\User::factory()->create([
            'name' => 'Admin Stok',
            'email' => 'adminstok@gmail.com',
            'password' => bcrypt('123'),
            'role' => 2,
        ]);

        $this->call([
            KategoriSeeder::class,
            SupplierSeeder::class,
            BahanBakuSeeder::class,
        ]);
    }
}