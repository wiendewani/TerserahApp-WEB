
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
                            <h4 class="panel-title">Data Customers</h2>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">ADD CUSTOMER   <i class="lnr lnr-plus-circle"></i></button>

                                </div>
                        </div>
                        <div class="panel-body">

                            <div class="col-4 ">
                                <form class="form-inline my-4 my-lg-3" method="get" action="/pembeli/search">
                                    <input name="pembeli_search" class="form-control mr-sm-2" type="search" placeholder="Masukan Nama Customer" aria-label="Search">
                                    <span class="input-group-prepend">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </span>
                                </form>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Pembeli</th>
                                        <th>Nama Pembeli</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_pembeli as $Pembeli)
                                    {{-- perulangan untuk menampilkan data --}}

                                    <tr>
                                        <td>{{$Pembeli -> kode_pembeli}}</td>
                                        <td>{{$Pembeli -> nama_pembeli}}</td>
                                        <td>{{$Pembeli -> jenis_kelamin}}</td>
                                        <td>{{$Pembeli -> alamat}}</td>
                                        <td>{{$Pembeli -> kota}}</td>
                                    <td>
                                        <a href="/pembeli/edit/{{$Pembeli ->kode_pembeli}}"  class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/pembeli/{{$Pembeli ->kode_pembeli}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus ?')">Delete</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Pembeli</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/pembeli/create" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                  <label for="namaPembeli">Nama Pembeli</label>
                  <input name="nama_pembeli" type="text" class="form-control" id="namaPembeli" aria-describedby="emailHelp" placeholder="Masukan Nama Pembeli">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="P">Perempuan</option>
                      <option value="L">Laki-laki</option>
                    </select>
                  </div>


                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input name="kota"type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Masukan Kota">
                </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
