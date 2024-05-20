<!-- resources/views/muzzakis/create.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container p-3">
        <h1>Tambah Muzzaki</h1>

        <form action="{{ route('muzzakis.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="tanggungan" class="form-label">Tanggungan</label>
                <input type="number" class="form-control" id="tanggungan" name="tanggungan">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <select class="form-select" aria-label="Default select example"  name="keterangan">
                    <option selected>--Pilih Keterangan--</option>
                    <option value="Mampu">Mampu</option>
                    <option value="Kurang Mampu">Kurang Mampu</option>
                  </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('muzzakis.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
