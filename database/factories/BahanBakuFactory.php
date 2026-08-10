<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class BahanBakuFactory extends Factory
{
    public function definition(): array
    {
        $bahan = [
            'Beras',
            'Telur',
            'Daging Ayam',
            'Minyak Goreng',
            'Susu',
            'Wortel',
            'Kentang',
            'Bayam',
            'Gula',
            'Garam'
        ];

        $satuan = [
            'Kg',
            'Liter',
            'Tray',
            'Pcs'
        ];

        return [
            'kategori_id' => Kategori::inRandomOrder()->first()->id,
            'supplier_id' => Supplier::inRandomOrder()->first()->id,

            'kode_bahan' => 'BHN-' . fake()->unique()->numberBetween(1000, 9999),

            'nama_bahan' => fake()->randomElement($bahan),

            'stok' => fake()->numberBetween(10, 500),

            'stok_minimum' => fake()->numberBetween(5, 20),

            'satuan' => fake()->randomElement($satuan),

            'harga' => fake()->numberBetween(10000, 100000),

            'tanggal_expired' => fake()->dateTimeBetween('now', '+1 year'),

            'deskripsi' => fake()->sentence(),

            'status' => fake()->randomElement([
                'tersedia',
                'habis'
            ]),
        ];
    }
}