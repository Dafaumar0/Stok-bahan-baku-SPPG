<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    public function definition(): array
    {
        $kategori = [
            'Karbohidrat',
            'Protein',
            'Sayuran',
            'Buah',
            'Minuman',
            'Bumbu'
        ];

        return [
            'kode_kategori' => 'KTG-' . fake()->unique()->numberBetween(100, 999),
            'nama_kategori' => fake()->randomElement($kategori),
            'deskripsi' => fake()->sentence(),
        ];
    }
}