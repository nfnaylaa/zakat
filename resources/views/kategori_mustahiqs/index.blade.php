
@extends('layouts.main')

@section('content')
    <div class="containerp-3">
        <h1>Data Kategori Mustahiq</h1>
        <a type="button" href="/kategori-mustahiqs-create" class="btn btn-primary btn-sm">Tambah Kategori</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Hak Uang</th>
                    <th>Hak Beras</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoriMustahiqs as $kategoriMustahiq)
                    <tr>
                        <td>{{ $kategoriMustahiq->kategori }}</td>
                        <td>{{ $kategoriMustahiq->hakUang }}</td>
                        <td>{{ $kategoriMustahiq->hakBeras }}</td>
                        <td>
                            <a href="{{ route('kategori-mustahiqs.show', $kategoriMustahiq->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('kategori-mustahiqs.edit', $kategoriMustahiq->id) }}" class="btn btn-light">Edit</a>
                            <form action="{{ route('kategori-mustahiqs.destroy', $kategoriMustahiq->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
