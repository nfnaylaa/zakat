@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Mustahiq</h1>

        <form action="{{ route('mustahiqlainnya.update', $mustahiq->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mustahiq->nama }}">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" name="kategori">
                    <option selected>--Pilih Kategori--</option>
                    @foreach ($kategoriMustahiqs as $kategoriMustahiq)
                        <option value="{{ $kategoriMustahiq->id }}" data-hak-uang="{{ $kategoriMustahiq->hakUang }}" data-hak-beras="{{ $kategoriMustahiq->hakBeras }}">{{ $kategoriMustahiq->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="jenisHak" class="form-label">Jenis Hak</label>
                <select class="form-select" id="jenisHak" name="jenisHak">
                    <option value="uang">Uang</option>
                    <option value="beras">Beras</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hak" class="form-label">Hak</label>
                <input type="text" class="form-control" id="hak" name="hak" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('mustahiqlainnya.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#kategori').change(function() {
                var selectedOption = $(this).find(':selected');
                var hakUangValue = selectedOption.data('hak-uang');
                var hakBerasValue = selectedOption.data('hak-beras');
                var jenisHak = $('#jenisHak').val();

                if (jenisHak === 'beras') {
                    $('#hak').val(hakBerasValue);
                } else {
                    $('#hak').val(hakUangValue);
                }
            });

            $('#jenisHak').change(function() {
                var selectedOption = $(this).find(':selected');
                var hakUangValue = $('#kategori option:selected').data('hak-uang');
                var hakBerasValue = $('#kategori option:selected').data('hak-beras');
                var jenisHak = selectedOption.val();

                if (jenisHak === 'beras') {
                    $('#hak').val(hakBerasValue);
                } else {
                    $('#hak').val(hakUangValue);
                }
            });

            var initialHakUangValue = $('#kategori option:selected').data('hak-uang');
            var initialHakBerasValue = $('#kategori option:selected').data('hak-beras');
            var initialJenisHak = $('#jenisHak').val();

            if (initialJenisHak === 'beras') {
                $('#hak').val(initialHakBerasValue);
            } else {
                $('#hak').val(initialHakUangValue);
            }
           
        });
    </script>
    </div>
@endsection
