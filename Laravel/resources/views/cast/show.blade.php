@extends('layouts.app', ['title' => 'Cast Show'])

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Cast Show</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cast">Casts</a></li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cast Show</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="font-weight-bold">Nama Pemeran</h3>
                        <p>{{ $cast->nama }}</p>

                        <h3 class="font-weight-bold">Umur Pemeran</h3>
                        <p>{{ $cast->umur }}</p>

                        <h3 class="font-weight-bold">Bio Pemeran</h3>
                        <p>{{ $cast->bio }}</p>

                        <a href="/cast" class="btn btn-warning text-white mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection