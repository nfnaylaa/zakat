

@extends('layouts.main')

@section('content')
    <div class="container p-3">
        <h1>Detail Mustahiq</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $mustahiq->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">Kategori</th>
                    <td>{{ $mustahiq->Kategori }}</td>
                </tr>
                <tr>
                    <th scope="row">Hak Uang</th>
                    <td>{{ $mustahiq->HakUang }}</td>
                </tr>
                <tr>
                    <th scope="row">Hak Beras</th>
                    <td>{{ $mustahiq->HakBeras }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('mustahiqs.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
