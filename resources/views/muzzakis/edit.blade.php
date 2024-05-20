
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Muzzaki</h1>

        <form action="{{ route('muzzakis.update', $muzzaki->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $muzzaki->nama }}">
            </div>

            <div class="mb-3">
                <label for="tanggungan" class="form-label">Tanggungan</label>
                <input type="number" class="form-control" id="tanggungan" name="tanggungan" value="{{ $muzzaki->tanggungan }}">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $muzzaki->keterangan }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('muzzakis.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
