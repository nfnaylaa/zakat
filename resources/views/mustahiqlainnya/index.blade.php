@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Daftar Mustahiq Lain</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row justify">
            <div class="col-md-2">
                <a href="{{ route('mustahiqlainnya.create') }}" class="btn btn-primary mb-3">Tambah Mustahiq</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('mustahiqlainnya.laporan') }}" class="btn btn-primary">Download PDF</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Hak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mustahiqs as $mustahiq)
                    <tr>
                        <td>{{ $mustahiq->nama }}</td>
                        <td>{{ $mustahiq->Kategori }}</td>
                        <td>{{ $mustahiq->Hak }}</td>
                        <td>
                            <a href="{{ route('mustahiqlainnya.show', $mustahiq->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ route('mustahiqlainnya.edit', $mustahiq->id) }}" class="btn btn-light btn-sm">Edit</a>
                            <form action="{{ route('mustahiqlainnya.destroy', $mustahiq->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mustahiq ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
