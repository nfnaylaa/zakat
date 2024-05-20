
@extends('layouts.main')

@section('content')
    <div class="container p-3">
        <h1>Detail Bayar Zakat</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $bayarZakat->nama_KK }}</h5>
                <p class="card-text">Tanggungan Dibayar: {{ $bayarZakat->tanggungan_dibayar }}</p>
                <p class="card-text">Uang dibayarkan: Rp.{{ number_format($bayarZakat->$Uang)}}</p>
                <p class="card-text">Beras dibayarkan: {{ $bayarZakat->$Beras}}</p>
                <p class="card-text">Jumlah Zakat: {{ $bayarZakat->tanggunganDibayar}}</p>
            </div>
        </div>

        <a href="{{ route('bayarzakats.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
