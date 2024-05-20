
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Detail Kategori Mustahiq</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kategori: {{ $kategoriMustahiq->kategori }}</h5>
                <p class="card-text">Hak: {{ $kategoriMustahiq->hak }}</p>
            </div>
        </div>

        <a href="{{ route('kategori-mustahiqs.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
