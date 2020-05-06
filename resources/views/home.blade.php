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

                            <div class="panel panel-headline">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Perkenalan Kelompok</h3>
                                    <p class="panel-subtitle">Pemprograman WEB</p>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="metric">
                                                <p>
                                                    <span class="number">201810370311207</span>
                                                    <span class="title">Fanny Ab'daul Maulidin</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="metric">
                                                <p>
                                                    <span class="number">201810370311210</span>
                                                    <span class="title">Wien Nurul Dewani</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="metric">
                                                <p>
                                                    <span class="number">201810370311214</span>
                                                    <span class="title">Miftakhul Hafidzun Nafi</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="metric">
                                                <p>
                                                    <span class="number">201810370311217</span>
                                                    <span class="title">Putri Sari Asih</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="metric">
                                                <p>
                                                    <span class="number">201810370311220</span>
                                                    <span class="title">Hafizh Salsabila Pradana</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content1')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
