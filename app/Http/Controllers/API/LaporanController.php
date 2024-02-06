<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LaporanPenjualan;
use App\Models\Menu;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $laporan = new Client();
        $url = 'https://tes-web.landa.id/intermediate/menu';

            $response = $laporan->request('GET', $url);
            $content = $response->getBody()->getContents();
            $data = json_decode($content, true);

            return response()->json($data);
    
}

public function transaksi(){
    $laporan = new Client();
    $url = 'https://tes-web.landa.id/intermediate/transaksi?tahun=2021';

        $response = $laporan->request('GET', $url);
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        return response()->json($data);

}

    public function post(Request $request){
        $laporan = LaporanPenjualan::create([
            'produk' => $request->produk,
            'kategori' => $request->kategori,
            'periode' => $request->periode,
            'bulan' => $request->bulan,
            'total' => $request->total,


    ]);
        return response()->json($laporan);
    }
}

