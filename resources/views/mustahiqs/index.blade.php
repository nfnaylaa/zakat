
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="my-2">Daftar Mustahiq</h1>
        
        <div class="row justify">
            <div class="col-md-2">
                <a href="{{ route('mustahiqs.create') }}" class="btn btn-primary mb-3">Tambah Mustahiq</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('download.pdf') }}" class="btn btn-primary">Download PDF</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Hak</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mustahiqs as $mustahiq)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mustahiq->nama }}</td>
                        <td>{{ $mustahiq->Kategori }}</td>
                        <td>{{ $mustahiq->Hak }}</td>
                        <td>
                            <a href="{{ route('mustahiqs.show', $mustahiq) }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ route('mustahiqs.edit', $mustahiq) }}" class="btn btn-secondary btn-sm">Edit</a>
                            <form action="{{ route('mustahiqs.destroy', $mustahiq) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
