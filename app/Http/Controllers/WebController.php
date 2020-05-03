<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class WebController extends Controller
{
    public function index(){
        // Ngambil semua data dari tabel Transaksi
        $transaksi = transaksi::all();
        // Return ke view Transaksi + yg di dalam [..] ngirim data $transaksi
        return view('transaksi',['transaksi' => $transaksi]);
        
    }
}
