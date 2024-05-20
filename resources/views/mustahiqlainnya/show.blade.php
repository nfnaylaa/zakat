@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Detail Mustahiq</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $mustahiq->nama }}</h5>
                <p class="card-text">Kategori: {{ $mustahiq->Kategori }}</p>
                <p class="card-text">Hak: {{ $mustahiq->Hak }}</p>
            </div>
        </div>

        <a href="{{ route('mustahiqlainnya.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
