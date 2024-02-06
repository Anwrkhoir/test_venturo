<?php

namespace Database\Seeders;

use App\Models\LaporanPenjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaporanPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaporanPenjualan::create([
            'produk' => 'Nasi Goreng',
            'kategori' => 'makanan',
            'periode' => 2021,
            'bulan' => 'januari', 
            'total' => 40000, 

        ]);

        LaporanPenjualan::create([
            'produk' => 'Teh',
            'kategori' => 'minuman',
            'periode' => 2021,
            'bulan' => 'januari', 
            'total' => 40000, 

        ]);
    }
}
