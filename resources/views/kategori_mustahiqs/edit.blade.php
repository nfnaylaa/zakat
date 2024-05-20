
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Kategori Mustahiq</h1>

        <form action="{{ route('kategori-mustahiqs.update', $kategoriMustahiq->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $kategoriMustahiq->kategori }}">
            </div>

            <div class="mb-3">
                <label for="hakUang" class="form-label">Hak Uang</label>
                <input type="text" class="form-control" id="hakUang" name="hakUang" value="{{ $kategoriMustahiq->hakUang }}">
            </div>
            <div class="mb-3">
                <label for="hakBeras" class="form-label">Hak Uang</label>
                <input type="text" class="form-control" id="hakBeras" name="hakBeras" value="{{ $kategoriMustahiq->hakBeras }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori-mustahiqs.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
