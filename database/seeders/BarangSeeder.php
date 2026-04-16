<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Mesin Cuci',
                'kategori_id' => 1,
                'harga_beli' => 1000000,
                'harga_jual' => 1500000,
            ],
            [
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Chitato',
                'kategori_id' => 2,
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Chimory',
                'kategori_id' => 3,
                'harga_beli' => 6000,
                'harga_jual' => 10000,
            ],
             [
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Penggaris',
                'kategori_id' => 4,
                'harga_beli' => 2000,
                'harga_jual' => 5000,
            ],
             [
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Casing HP',
                'kategori_id' => 5,
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
