
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
                        <h3 class="panel-title">Edit Customer</h3>
                    </div>
                    <div class="panel-body">

            @foreach($pembeli as $Pembeli)
            <form action="/pembeli/update/{{$Pembeli -> kode_pembeli}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="namaPembeli">Kode Pembeli</label>
                    <input name="kode_pembeli" type="number" class="form-control" id="namaPembeli" aria-describedby="emailHelp" placeholder="Masukan Nama Pembeli" value="{{$Pembeli -> kode_pembeli}}" disabled>
                  </div>
                <div class="form-group">
                  <label for="namaPembeli">Nama Pembeli</label>
                  <input name="nama_pembeli" type="text" class="form-control" id="namaPembeli" aria-describedby="emailHelp" placeholder="Masukan Nama Pembeli" value="{{$Pembeli -> nama_pembeli}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" value="{{$Pembeli -> jenis_kelamin}}">
                      <option value="P">Perempuan</option>
                      <option value="L">Laki-laki</option>
                    </select>
                  </div>


                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input name="kota"type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Masukan Kota" value="{{$Pembeli -> kota}}">
                </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$Pembeli -> alamat}}</textarea>
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

