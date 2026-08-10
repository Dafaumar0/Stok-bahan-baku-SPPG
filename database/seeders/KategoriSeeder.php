<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_kategori' => 'KTG-001',
                'nama_kategori' => 'Karbohidrat',
                'deskripsi' => 'Kategori sumber karbohidrat',
            ],
            [
                'kode_kategori' => 'KTG-002',
                'nama_kategori' => 'Protein',
                'deskripsi' => 'Kategori sumber protein',
            ],
            [
                'kode_kategori' => 'KTG-003',
                'nama_kategori' => 'Sayuran',
                'deskripsi' => 'Kategori sayuran segar',
            ],
            [
                'kode_kategori' => 'KTG-004',
                'nama_kategori' => 'Buah',
                'deskripsi' => 'Kategori buah-buahan',
            ],
        ];

        Kategori::insert($data);
    }
}