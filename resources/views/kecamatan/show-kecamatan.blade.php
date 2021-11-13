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
                {{ $title }} <b> {{ $kecamatan->nama_kecamatan }}</b>
            </div>
            <div class="card-body">
                <table class="table table-striped mb-5">
                    <tbody>
                        <tr>
                            <td>Nama Kecamatan</td>
                            <td> : </td>
                            <td> {{ $kecamatan->nama_kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Luas Kecamatan</td>
                            <td> : </td>
                            <td> {{ $kecamatan->luas_kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Desa</td>
                            <td> : </td>
                            <td> {{ $kecamatan->jumlah_desa }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Petani</td>
                            <td> : </td>
                            <td> {{ $kecamatan->jumlah_petani }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="/kecamatan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </section>
@endsection
