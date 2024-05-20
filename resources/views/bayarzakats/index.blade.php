@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Pembayaran Zakat</h1>
        <a href="{{ route('bayarzakats.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran Zakat</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama KK</th>
                    <th>Tanggungan</th>
                    <th>Jenis Bayar</th>
                    <th> Dibayar</th>
                    <th>Uang</th>
                    <th>Beras</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bayarZakats as $bayarZakat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bayarZakat->nama_KK }}</td>
                        <td>{{ $bayarZakat->tanggungan }}</td>
                        <td>{{ $bayarZakat->jenis_bayar }}</td>
                        <td>{{ $bayarZakat->tanggungan_dibayar }}</td>
                        <td>Rp. {{ number_format($bayarZakat->Uang, 0, ',', '.') }}</td>
                        <td>{{ $bayarZakat->Beras }} Kg.</td>
                        <td>
                            <a href="{{ route('bayarzakats.show', $bayarZakat->id) }}" class="btn btn-sm btn-primary">Detail</a>
                            <a href="{{ route('bayarzakats.edit', $bayarZakat->id) }}" class="btn btn-sm btn-light">Edit</a>
                            <form action="{{ route('bayarzakats.destroy', $bayarZakat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pembayaran ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
