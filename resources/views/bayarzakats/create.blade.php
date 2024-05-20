@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Pembayaran Zakat</h1>
        <form action="{{ route('bayarzakats.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="muzzaki_id" class="form-label">Nama Muzzaki</label>
                <select name="muzzaki_id" id="muzzaki_id" class="form-select">
                    @foreach ($muzzakis as $muzzaki)
                        <option value="{{ $muzzaki->id }}">{{ $muzzaki->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jenis_bayar" class="form-label">Jenis Bayar</label>
                <select name="jenis_bayar" id="jenis_bayar" class="form-select">
                    <option value="beras">Beras</option>
                    <option value="uang">Uang</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggungan_dibayar" class="form-label">Tanggungan Dibayar</label>
                <input type="number" name="tanggungan_dibayar" id="tanggungan_dibayar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
