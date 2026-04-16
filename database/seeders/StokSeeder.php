<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Stok untuk Mesin Cuci (barang_id: 1, supplier_id: 1)
            [
                'supplier_id' => 1,
                'barang_id' => 1,
                'user_id' => 1, // admin
                'stok_tanggal' => '2026-04-01',
                'stok_jumlah' => 10,
            ],
            [
                'supplier_id' => 1,
                'barang_id' => 1,
                'user_id' => 2, // manager
                'stok_tanggal' => '2026-04-05',
                'stok_jumlah' => 5,
            ],
            // Stok untuk Chitato (barang_id: 2, supplier_id: 2)
            [
                'supplier_id' => 2,
                'barang_id' => 2,
                'user_id' => 3, // staff
                'stok_tanggal' => '2026-04-02',
                'stok_jumlah' => 50,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 2,
                'user_id' => 1, // admin
                'stok_tanggal' => '2026-04-08',
                'stok_jumlah' => 25,
            ],
            // Stok untuk Chimory (barang_id: 3, supplier_id: 3)
            [
                'supplier_id' => 3,
                'barang_id' => 3,
                'user_id' => 2, // manager
                'stok_tanggal' => '2026-04-03',
                'stok_jumlah' => 30,
            ],
            // Stok untuk Penggaris (barang_id: 4, supplier_id: 1)
            [
                'supplier_id' => 1,
                'barang_id' => 4,
                'user_id' => 3, // staff
                'stok_tanggal' => '2026-04-04',
                'stok_jumlah' => 100,
            ],
            // Stok untuk Casing HP (barang_id: 5, supplier_id: 2)
            [
                'supplier_id' => 2,
                'barang_id' => 5,
                'user_id' => 1, // admin
                'stok_tanggal' => '2026-04-06',
                'stok_jumlah' => 20,
            ],
            [
                'supplier_id' => 2,
                'barang_id' => 5,
                'user_id' => 2, // manager
                'stok_tanggal' => '2026-04-10',
                'stok_jumlah' => 15,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
