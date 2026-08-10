<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_supplier' => 'SPL-' . fake()->unique()->numberBetween(100, 999),
            'nama_supplier' => fake()->company(),
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
        ];
    }
} 