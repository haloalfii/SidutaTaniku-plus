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
                <form action="/kecamatan/{{ $kecamatan->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama_kecamatan" class="form-label">Nama Kecamatan</label>
                        <input type="text" class="form-control @error('nama_kecamatan') is-invalid @enderror"
                            id="nama_kecamatan" name="nama_kecamatan" autofocus
                            value="{{ old('nama_kecamatan', $kecamatan->nama_kecamatan) }}">

                        @error('nama_kecamatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="luas_kecamatan" class="form-label">Luas Kecamatan (Hectare)</label>
                        <input type="number" class="form-control @error('luas_kecamatan') is-invalid @enderror"
                            id="luas_kecamatan" name="luas_kecamatan" autofocus
                            value="{{ old('luas_kecamatan', $kecamatan->luas_kecamatan) }}">

                        @error('luas_kecamatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jumlah_desa" class="form-label">Jumlah Desa</label>
                        <input type="number" class="form-control @error('jumlah_desa') is-invalid @enderror"
                            id="jumlah_desa" name="jumlah_desa" autofocus
                            value="{{ old('jumlah_desa', $kecamatan->jumlah_desa) }}">

                        @error('jumlah_desa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jumlah_petani" class="form-label">Jumlah Petani</label>
                        <input type="text" class="form-control @error('jumlah_petani') is-invalid @enderror"
                            id="jumlah_petani" name="jumlah_petani" autofocus
                            value="{{ old('jumlah_petani', $kecamatan->jumlah_petani) }}">

                        @error('jumlah_petani')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Tambah Kecamatan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
