<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_supplier' => 'SPL-001',
                'nama_supplier' => 'PT Pangan Nusantara',
                'alamat' => 'Medan',
                'telepon' => '081234567890',
            ],
            [
                'kode_supplier' => 'SPL-002',
                'nama_supplier' => 'CV Sumber Gizi',
                'alamat' => 'Binjai',
                'telepon' => '081298765432',
            ],
            [
                'kode_supplier' => 'SPL-003',
                'nama_supplier' => 'UD Berkah Tani',
                'alamat' => 'Deli Serdang',
                'telepon' => '082211223344',
            ],
        ];

        Supplier::insert($data);
    }
}