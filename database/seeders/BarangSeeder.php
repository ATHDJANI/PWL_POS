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
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BA1', 'barang_nama' => 'Intel', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BA2', 'barang_nama' => 'Ryzen', 'harga_beli' => 2100000, 'harga_jual' => 2700000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BA3', 'barang_nama' => 'AMD', 'harga_beli' => 4000000, 'harga_jual' => 4500000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BA4', 'barang_nama' => 'NVIDIA', 'harga_beli' => 5000000, 'harga_jual' => 5500000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BA5', 'barang_nama' => 'DDR 4', 'harga_beli' => 1000000, 'harga_jual' => 1250000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BA6', 'barang_nama' => 'DDR 5', 'harga_beli' => 2000000, 'harga_jual' => 2250000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BA7', 'barang_nama' => '256 GB', 'harga_beli' => 400000, 'harga_jual' => 425000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BA8', 'barang_nama' => '512 GB', 'harga_beli' => 500000, 'harga_jual' => 555000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BA9', 'barang_nama' => '550 WATT', 'harga_beli' => 800000, 'harga_jual' => 850000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BA10', 'barang_nama' => '450 WATT', 'harga_beli' => 600000, 'harga_jual' => 650000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
