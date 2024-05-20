@extends('layouts.main')

@section('content')
<div class="container p-4">

    <section class="border-bottom p-3 my-4">
        <h3>Selamat Datang, {{ auth()->user()->name }} </h3>
    </section>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Muzzaki</h5>
                    <p class="card-text">{{ $bayarZakat }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mustahiq Warga</h5>
                    <p class="card-text">{{ $warga }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mustahiq Lainnya</h5>
                    <p class="card-text">{{ $lainnya }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Jiwa</h5>
                    <p class="card-text">{{ $totaljiwa }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Uang</h5>
                    <p class="card-text">{{ $Uang + $Uang1 }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Beras</h5>
                    <p class="card-text">{{ $Beras1 + $Beras0 }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
