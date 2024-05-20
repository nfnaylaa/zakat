<!-- resources/views/muzzakis/index.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container p-3">
        <h1>Data Muzzaki</h1>

        <a type="button" href="/muzzakis-create" class="btn btn-primary btn-sm">Tambah Muzzaki</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggungan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muzzakis as $muzzaki)
                    <tr>
                        <td>{{ $muzzaki->nama }}</td>
                        <td>{{ $muzzaki->tanggungan }}</td>
                        <td>{{ $muzzaki->keterangan }}</td>
                        <td>
                            <a href="{{ route('muzzakis.show', $muzzaki->id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{ route('muzzakis.edit', $muzzaki->id) }}" class="btn btn-light">Edit</a>
                            <form action="{{ route('muzzakis.destroy', $muzzaki->id) }}" method="POST" style="display: inline-block;">
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
