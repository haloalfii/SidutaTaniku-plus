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
                <form action="/tahun/{{ $tahun->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun"
                            autofocus value="{{ old('tahun', $tahun->tahun) }}">

                        @error('tahun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-4" type="submit">Edit Tahun</button>
                </form>
            </div>
        </div>
    </section>
@endsection
