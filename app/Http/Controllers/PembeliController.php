<?php

/*
Nama
NIM

pembeli controller function CURD

*/
namespace App\Http\Controllers;


use App\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembeliController extends Controller
{
    public function index(){
        $data_pembeli = \App\Pembeli::all();
        return view('customer.customer')->with('data_pembeli',$data_pembeli);
    }

    public function create(Request $request){
        \App\Pembeli::create($request->all());
        return redirect('/pembeli')->with('sukses','Data berhasil diinput');
    }

    public function edit($kode_pembeli){
        // $Pembeli = \App\Pembeli::find($kode_pembeli);
        // return view('customer.edit',['Pembeli'=>$Pembeli]);
        $pembeli = DB::table('pembeli')->where('kode_pembeli',$kode_pembeli)->get();
        return view('customer.edit',['pembeli' => $pembeli]);
    }

    public function update(Request $request, $id)
    {
        DB::table('pembeli')->where('kode_pembeli',$request->kode_pembeli)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kota' => $request->kota
        ]);

        return redirect('/pembeli');
    }

    public function delete($kode_pembeli){
        Pembeli::where('kode_pembeli',$kode_pembeli)->delete();
        return redirect('/pembeli')->with('sukses','Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
		$search = $request->pembeli_search;

        // mengambil data dari table pegawai sesuai pencarian data
        $search_barang = DB::table('pembeli')->where('nama_pembeli','like',"%".$search."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('customer.customer',['data_pembeli' => $search_barang]);
    }
}
