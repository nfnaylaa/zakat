
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Tambah Kategori Mustahiq</h1>

        <form action="{{ route('kategori-mustahiqs.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
            </div>

            <div class="mb-3">
                <label for="hakUang" class="form-label">Hak Uang</label>
                <input type="text" class="form-control" id="hakUang" name="hakUang">
            </div>
            <div class="mb-3">
                <label for="hakBeras" class="form-label">Hak Beras</label>
                <input type="text" class="form-control" id="hakBeras" name="hakBeras">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori-mustahiqs.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
