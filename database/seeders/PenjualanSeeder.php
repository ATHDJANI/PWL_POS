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
            ['id_penjualan' => 1, 'user_id' => 3, 'pembeli' => 'RAYA', 'penjualan_kode' => 'PN1', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 2, 'user_id' => 3, 'pembeli' => 'KONA', 'penjualan_kode' => 'PN2', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 3, 'user_id' => 3, 'pembeli' => 'EVI', 'penjualan_kode' => 'PN3', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 4, 'user_id' => 3, 'pembeli' => 'NURWA', 'penjualan_kode' => 'PN4', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 5, 'user_id' => 3, 'pembeli' => 'SAPII', 'penjualan_kode' => 'PN5', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 6, 'user_id' => 3, 'pembeli' => 'LUNA', 'penjualan_kode' => 'PN6', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 7, 'user_id' => 3, 'pembeli' => 'KENZY', 'penjualan_kode' => 'PN7', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 8, 'user_id' => 3, 'pembeli' => 'RAHMA', 'penjualan_kode' => 'PN8', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 9, 'user_id' => 3, 'pembeli' => 'SUPRI', 'penjualan_kode' => 'PN9', 'penjualan_tanggal' => '2024-03-05'],
            ['id_penjualan' => 10, 'user_id' => 3, 'pembeli' => 'YANTO', 'penjualan_kode' => 'PN10', 'penjualan_tanggal' => '2024-03-05'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
