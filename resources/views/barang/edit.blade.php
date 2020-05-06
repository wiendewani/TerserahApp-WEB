
@extends('layouts.master')

@section('content')

<div class="main">
    <div class="container-fluid">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Product</h3>
                    </div>
                    <div class="panel-body">

                        @foreach($barang as $Barang)
                        <form action="/barang/update/{{$Barang -> kode_barang}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="kodeBarang">Kode Barang</label>
                                <input name="kode_barang" type="number" class="form-control" id="kodeBarang" aria-describedby="emailHelp" value="{{$Barang -> kode_barang}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="namaBarang">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="namaBarang" aria-describedby="emailHelp" placeholder="Masukan Nama Barang"  value="{{$Barang -> nama_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input name="merk" type="text" class="form-control" id="merk" aria-describedby="emailHelp" placeholder="Masukan Merk Barang"  value="{{$Barang -> merk}}">
                            </div>
                            <div class="form-group">
                                <label for="type">Type Barang</label>
                                <input name="type" type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholder="Masukan Type Barang"  value="{{$Barang -> type}}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Barang</label>
                                <input name="harga" type="number" class="form-control" id="harga" aria-describedby="emailHelp" placeholder="Masukan Harga Barang"  value="{{$Barang -> harga}}">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input name="stok" type="number" class="form-control" id="harga" aria-describedby="emailHelp" placeholder="Masukan Stok Barang"  value="{{$Barang -> stok}}">
                            </div>

                            <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
