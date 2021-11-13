@extends('layout')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $table }}</h3>
                <p class="text-subtitle text-muted">Data dari {{ $table }}</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $table }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                {{ $table }}
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kecamatan</th>
                            <th>Luas Kecamatan</th>
                            <th>Jumlah Desa</th>
                            <th>Jumlah Petani</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kecamatan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_kecamatan }}</td>
                                <td>{{ number_format($item->luas_kecamatan) }} Hectare</td>
                                <td>{{ $item->jumlah_desa }}</td>
                                <td>{{ $item->jumlah_petani }}</td>
                                <td>
                                    <a href="/kecamatan/{{ $item->id }}" class="btn btn-success">Detail</a>
                                    <a href="/kecamatan/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/kecamatan/{{ $item->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger border-0"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/kecamatan/create" class="btn btn-primary">Tambah Kecamatan</a>
            </div>
        </div>
    </section>

@endsection
