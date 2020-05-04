<?php

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
        $Pembeli = \App\Pembeli::find($kode_pembeli);
        return view('customer.edit',['Pembeli'=>$Pembeli]);
    }

    public function update(Request $request){

       $kode_pembeli = $request->kode_pembeli;
       $nama_pembeli = $request ->nama_pembeli;
       $jenis_kelamin = $request ->jenis_kelamin;
       $kota = $request ->kota;
       $alamat = $request ->alamat;

       Pembeli::where('kode_pembeli',$kode_pembeli)->update([
           'nama_pembeli' =>$nama_pembeli,
           'jenis_kelamin' =>$jenis_kelamin,
           'kota' => $kota,
           'alamat'=> $alamat

       ]);

        return redirect('/pembeli')->with('sukses','Data berhasil diupdate');
    }

    public function delete($kode_pembeli){
        Pembeli::where('kode_pembeli',$kode_pembeli)->delete();
        return redirect('/pembeli')->with('sukses','Data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $Pembeli = DB::table('pembeli')->where('nama_pembeli','like','%'.$search.'%')->paginate(5);
        return view('customer',['pembeli'=>$Pembeli]);
    }
}
