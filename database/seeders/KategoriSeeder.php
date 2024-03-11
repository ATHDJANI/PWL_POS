<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KT1', 'kategori_nama' => 'CPU'],
            ['kategori_id' => 2, 'kategori_kode' => 'KT2', 'kategori_nama' => 'VGA'],
            ['kategori_id' => 3, 'kategori_kode' => 'KT3', 'kategori_nama' => 'RAM'],
            ['kategori_id' => 4, 'kategori_kode' => 'KT4', 'kategori_nama' => 'SSD'],
            ['kategori_id' => 5, 'kategori_kode' => 'KT5', 'kategori_nama' => 'PSU'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
