
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
                            <h4 class="panel-title">Data Product</h2>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">ADD PRODUCT   <i class="lnr lnr-plus-circle"></i></button>

                                </div>
                        </div>
                        <div class="panel-body">

                            <div class="col-4 ">
                                <form class="form-inline my-2 my-lg-3" method="get" action="/barang/search">
                                    <input name="barang_search" class="form-control mr-sm-2" type="search" placeholder="Masukan Nama Barang" aria-label="Search">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </span>
                                </form>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_barang as $barang)
                                    {{-- perulangan untuk menampilkan data --}}

                                    <tr>
                                        <td>{{$barang -> kode_barang}}</td>
                                        <td>{{$barang -> nama_barang}}</td>
                                        <td>{{$barang -> merk}}</td>
                                        <td>{{$barang -> type}}</td>
                                        <td>{{$barang -> harga}}</td>
                                        <td>{{$barang -> stok}}</td>
                                    <td>
                                        <a href="/barang/edit/{{$barang -> kode_barang}}"  class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/barang/delete/{{$barang ->kode_barang}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ?')">Delete</a>
                                    </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/barang/create" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" placeholder="Masukan Nama Barang">
                </div>

                <div class="form-group">
                  <label for="merk">Merk</label>
                  <input name="merk" type="text" class="form-control" id="merk" aria-describedby="emailHelp" placeholder="Masukan Merk Barang">
                </div>


                <div class="form-group">
                    <label for="type">Type</label>
                    <input name="type"type="text" class="form-control" id="type" aria-describedby="emailHelp" placeholder="Masukan Type">
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input name="harga" type="number" class="form-control" id="harga" aria-describedby="emailHelp" placeholder="Masukan Harga">
                </div>

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input name="stok" type="number" class="form-control" id="stok" aria-describedby="emailHelp" placeholder="Masukan Stok">
                </div>


                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        </div>
    </div>
@stop
