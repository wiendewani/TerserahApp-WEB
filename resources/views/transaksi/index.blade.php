@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Data Transaksi</h3>
        <br />

        <div align="right">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Add
            </button>
        </div>

        <table class="table table-bordered" align="center"> 
            <tr>
                <th>ID Transaksi</th>
                <th>Tanggal Beli</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
            </tr>

            @foreach($innertransaksi as $data)
            <tr>
                <td>{{$data -> id}}</td>
                <td>{{$data -> tgl_beli}}</td>
                <td>{{$data -> nama_pembeli}}</td>
                <td>{{$data -> nama_barang}}</td>
                <td>{{$data -> harga}}</td>
            </tr>

            @endforeach
        </table> 
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Transaksi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/transaksi/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="namaPembeli">Kode Transaksi</label>
                    <input name="id" type="number" class="form-control" id="namaPembeli" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="namaPembeli">Nama Pembeli</label>
                    <select name="kode_pembeli" class="form-control" id="exampleFormControlSelect1">
                        @foreach($pembeli as $nama_pembeli)
                            <option value="{{$nama_pembeli -> kode_pembeli}}">{{$nama_pembeli -> nama_pembeli}} - {{$nama_pembeli -> kota}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Barang</label>
                    <select name="kode_barang" class="form-control" id="exampleFormControlSelect1">
                        @foreach($barang as $data_barang)
                            <option value="{{$data_barang -> kode_barang}}}">{{$data_barang -> nama_barang}} - {{$data_barang -> type}} - {{$data_barang -> merk}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection