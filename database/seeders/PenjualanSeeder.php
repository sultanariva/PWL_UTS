<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3, // staff/kasir
                'pembeli' => 'Ahmad Surya',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2026-04-10 10:30:00',
            ],
            [
                'user_id' => 3, // staff/kasir
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2026-04-11 14:15:00',
            ],
            [
                'user_id' => 1, // admin
                'pembeli' => 'Citra Dewi',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2026-04-12 09:45:00',
            ],
            [
                'user_id' => 2, // manager
                'pembeli' => 'Dedi Kurniawan',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2026-04-13 16:20:00',
            ],
            [
                'user_id' => 3, // staff/kasir
                'pembeli' => 'Eka Putri',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2026-04-14 11:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
