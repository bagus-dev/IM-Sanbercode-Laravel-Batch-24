@extends('layouts.app', ['title' => 'Casts Create'])

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Casts Create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/cast">Casts</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                        <h3 class="card-title">Casts Create</h3>
                    </div>
                    <div class="card-body">
                        <form action="/cast" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama Pemeran</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Pemeran">
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur Pemeran</label>
                                <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur Pemeran">
                                @error('umur')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio Pemeran</label>
                                <textarea name="bio" rows="5" class="form-control @error('bio') is-invalid @enderror"></textarea>
                                @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection