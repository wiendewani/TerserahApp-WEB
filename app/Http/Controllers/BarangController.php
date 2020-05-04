<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_barang = \App\Barang::all();
        return view('barang.barang')->with('data_barang',$data_barang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Barang::create($request->all());
        return redirect('/barang')->with('sukses','Data berhasil diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = DB::table('barangs')->where('kode_barang',$id)->get();
        return view('barang.edit',['barang' => $barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('barangs')->where('kode_barang',$request->id)->update([
            'nama_barang' => $request->nama_barang,
            'merk' => $request->merk,
            'type' => $request->type,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('kode_barang',$id)->delete();
        return redirect('/barang')->with('sukses','Data berhasil dihapus');
    }

    /**
     * Search your data from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // menangkap data pencarian
		$search = $request->barang_search;

        // mengambil data dari table pegawai sesuai pencarian data
        $search_barang = DB::table('barangs')->where('nama_barang','like',"%".$search."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('barang.barang',['data_barang' => $search_barang]);
    }
}
