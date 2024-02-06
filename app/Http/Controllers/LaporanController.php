<?php

namespace App\Http\Controllers;

use App\Models\LaporanPenjualan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){


        $makanan = LaporanPenjualan::where("kategori", 'makanan')->get();
        $minuman = LaporanPenjualan::where("kategori", 'minuman')->get();

        $data = [
        'makanan' => $makanan,
        'minuman' => $minuman,
        ];

return view('index', $data);
        
    }
}
