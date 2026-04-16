<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Detail untuk PJ001 (penjualan_id: 1)
            [
                'penjualan_id' => 1,
                'barang_id' => 2, // Chitato
                'jumlah' => 3,
                'harga' => 12000, // harga jual Chitato
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3, // Chimory
                'jumlah' => 2,
                'harga' => 10000, // harga jual Chimory
            ],
            // Detail untuk PJ002 (penjualan_id: 2)
            [
                'penjualan_id' => 2,
                'barang_id' => 4, // Penggaris
                'jumlah' => 5,
                'harga' => 5000, // harga jual Penggaris
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5, // Casing HP
                'jumlah' => 1,
                'harga' => 20000, // harga jual Casing HP
            ],
            // Detail untuk PJ003 (penjualan_id: 3)
            [
                'penjualan_id' => 3,
                'barang_id' => 1, // Mesin Cuci
                'jumlah' => 1,
                'harga' => 1500000, // harga jual Mesin Cuci
            ],
            // Detail untuk PJ004 (penjualan_id: 4)
            [
                'penjualan_id' => 4,
                'barang_id' => 2, // Chitato
                'jumlah' => 4,
                'harga' => 12000, // harga jual Chitato
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 3, // Chimory
                'jumlah' => 3,
                'harga' => 10000, // harga jual Chimory
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 4, // Penggaris
                'jumlah' => 2,
                'harga' => 5000, // harga jual Penggaris
            ],
            // Detail untuk PJ005 (penjualan_id: 5)
            [
                'penjualan_id' => 5,
                'barang_id' => 5, // Casing HP
                'jumlah' => 2,
                'harga' => 20000, // harga jual Casing HP
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
