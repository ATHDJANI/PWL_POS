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
            ['detail_id' => 1, 'id_penjualan' => 1, 'barang_id' => 1, 'harga' => 11000000, 'jumlah' => 11],
            ['detail_id' => 2, 'id_penjualan' => 1, 'barang_id' => 2, 'harga' => 12000000, 'jumlah' => 22],
            ['detail_id' => 3, 'id_penjualan' => 1, 'barang_id' => 3, 'harga' => 13000000, 'jumlah' => 33],
            ['detail_id' => 4, 'id_penjualan' => 2, 'barang_id' => 4, 'harga' => 14000000, 'jumlah' => 44],
            ['detail_id' => 5, 'id_penjualan' => 2, 'barang_id' => 5, 'harga' => 15000000, 'jumlah' => 55],
            ['detail_id' => 6, 'id_penjualan' => 2, 'barang_id' => 6, 'harga' => 6000000, 'jumlah' => 66],
            ['detail_id' => 7, 'id_penjualan' => 3, 'barang_id' => 7, 'harga' => 7000000, 'jumlah' => 77],
            ['detail_id' => 8, 'id_penjualan' => 3, 'barang_id' => 8, 'harga' => 8000000, 'jumlah' => 88],
            ['detail_id' => 9, 'id_penjualan' => 3, 'barang_id' => 9, 'harga' => 9000000, 'jumlah' => 99],
            ['detail_id' => 10, 'id_penjualan' => 4, 'barang_id' => 10, 'harga' => 10000000, 'jumlah' => 100],
            ['detail_id' => 11, 'id_penjualan' => 4, 'barang_id' => 1, 'harga' => 11000000, 'jumlah' => 111],
            ['detail_id' => 12, 'id_penjualan' => 4, 'barang_id' => 2, 'harga' => 12000000, 'jumlah' => 112],
            ['detail_id' => 13, 'id_penjualan' => 5, 'barang_id' => 3, 'harga' => 13000000, 'jumlah' => 113],
            ['detail_id' => 14, 'id_penjualan' => 5, 'barang_id' => 4, 'harga' => 14000000, 'jumlah' => 114],
            ['detail_id' => 15, 'id_penjualan' => 5, 'barang_id' => 5, 'harga' => 15000000, 'jumlah' => 115],
            ['detail_id' => 16, 'id_penjualan' => 6, 'barang_id' => 6, 'harga' => 16000000, 'jumlah' => 116],
            ['detail_id' => 17, 'id_penjualan' => 6, 'barang_id' => 7, 'harga' => 17000000, 'jumlah' => 117],
            ['detail_id' => 18, 'id_penjualan' => 6, 'barang_id' => 8, 'harga' => 18000000, 'jumlah' => 118],
            ['detail_id' => 19, 'id_penjualan' => 7, 'barang_id' => 9, 'harga' => 19000000, 'jumlah' => 119],
            ['detail_id' => 20, 'id_penjualan' => 7, 'barang_id' => 10, 'harga' => 20000000, 'jumlah' => 210],
            ['detail_id' => 21, 'id_penjualan' => 7, 'barang_id' => 1, 'harga' => 21000000, 'jumlah' => 211],
            ['detail_id' => 22, 'id_penjualan' => 8, 'barang_id' => 2, 'harga' => 22000000, 'jumlah' => 212],
            ['detail_id' => 23, 'id_penjualan' => 8, 'barang_id' => 3, 'harga' => 23000000, 'jumlah' => 213],
            ['detail_id' => 24, 'id_penjualan' => 8, 'barang_id' => 4, 'harga' => 24000000, 'jumlah' => 214],
            ['detail_id' => 25, 'id_penjualan' => 9, 'barang_id' => 5, 'harga' => 25000000, 'jumlah' => 215],
            ['detail_id' => 26, 'id_penjualan' => 9, 'barang_id' => 6, 'harga' => 26000000, 'jumlah' => 216],
            ['detail_id' => 27, 'id_penjualan' => 9, 'barang_id' => 7, 'harga' => 27000000, 'jumlah' => 271],
            ['detail_id' => 28, 'id_penjualan' => 10, 'barang_id' => 8, 'harga' => 28000000, 'jumlah' => 281],
            ['detail_id' => 29, 'id_penjualan' => 10, 'barang_id' => 9, 'harga' => 29000000, 'jumlah' => 291],
            ['detail_id' => 30, 'id_penjualan' => 10, 'barang_id' => 10, 'harga' => 30000000, 'jumlah' => 301],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
