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
                            <th>Komoditas</th>
                            <th>Jenis Komoditas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komoditas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_komoditas }}</td>
                                <td>{{ $item->jenis_komoditas }}</td>
                                <td>
                                    <a href="/komoditas/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/komoditas/{{ $item->id }}" method="POST" class="d-inline">
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
                <a href="/komoditas/create" class="btn btn-primary">Tambah Komoditas</a>
            </div>
        </div>
    </section>

@endsection
