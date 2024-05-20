
@extends('layouts.main')

@section('content')
    <div class="container p-3">
        <h1>Detail Muzzaki</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $muzzaki->nama }}</h5>
                <p class="card-text">Tanggungan: {{ $muzzaki->tanggungan }}</p>
                <p class="card-text">Keterangan: {{ $muzzaki->keterangan }}</p>
            </div>
        </div>

        <a href="{{ route('muzzakis.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
