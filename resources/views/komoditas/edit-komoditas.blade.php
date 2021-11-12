@extends('layout')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
                <p class="text-subtitle text-muted">{{ $title }}</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                {{ $title }}
            </div>
            <div class="card-body">
                <form action="/komoditas/{{ $komoditas->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama_komoditas" class="form-label">Nama Komoditas</label>
                        <input type="text" class="form-control @error('nama_komoditas') is-invalid @enderror"
                            id="nama_komoditas" name="nama_komoditas" autofocus
                            value="{{ old('nama_komoditas', $komoditas->nama_komoditas) }}">

                        @error('nama_komoditas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jenis_komoditas" class="form-label">Jenis Komoditas</label>
                        <input type="text" class="form-control @error('jenis_komoditas') is-invalid @enderror"
                            id="jenis_komoditas" name="jenis_komoditas"
                            value="{{ old('jenis_komoditas', $komoditas->jenis_komoditas) }}">

                        @error('jenis_komoditas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Edit Komoditas</button>
                </form>
            </div>
        </div>
    </section>
@endsection
