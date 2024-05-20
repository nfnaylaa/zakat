<?php

namespace App\Http\Controllers;

use App\Models\Mustahiq_Lainnya;
use App\Models\Kategori_Mustahiq;
use Illuminate\Http\Request;

class MustahiqLainnyaController extends Controller
{
    public function index()
    {
        $mustahiqs = Mustahiq_Lainnya::all();
        return view('mustahiqlainnya.index', compact('mustahiqs'),[
            'tittle'=>'Distribusi'
        ]);
    }

    public function create()
    {
        $kategoriMustahiqs = Kategori_Mustahiq::all();
        return view('mustahiqlainnya.create', compact('kategoriMustahiqs'),[
            'tittle'=>'Distribusi'
        ]);
    }

    public function store(Request $request)
    {
        $kategoriMustahiq = Kategori_Mustahiq::find($request->kategori);

        $mustahiq = new Mustahiq_Lainnya;
        $mustahiq->nama = $request->nama;
        $mustahiq->Kategori = $kategoriMustahiq->kategori;
        $mustahiq->Hak = $request->hak;
        $mustahiq->jenisHak = $request->jenisHak;
        $mustahiq->save();

        return redirect()->route('mustahiqlainnya.index')->with('success', 'Mustahiq berhasil ditambahkan.');
    }

    public function show(Mustahiq_Lainnya $mustahiq)
    {
        return view('mustahiqlainnya.show', compact('mustahiq'),[
            'tittle'=>'Distribusi'
        ]);
    }

    public function edit(Mustahiq_Lainnya $mustahiq)
    {
        $kategoriMustahiqs = Kategori_Mustahiq::all();
        return view('mustahiqlainnya.edit', compact('mustahiq', 'kategoriMustahiqs'),[
            'tittle'=>'Distribusi'
        ]);
    }

    public function update(Request $request, Mustahiq_Lainnya $mustahiq)
    {
        $kategoriMustahiq = Kategori_Mustahiq::find($request->kategori);

        $mustahiq->nama = $request->nama;
        $mustahiq->Kategori = $kategoriMustahiq->kategori;
        $mustahiq->Hak = $request->hak;
        $mustahiq->jenisHak = $request->jenisHak;
        $mustahiq->save();

        return redirect()->route('mustahiqlainnya.index')->with('success', 'Mustahiq berhasil diperbarui.');
    }

    public function destroy(Mustahiq_Lainnya $mustahiq)
    {
        $mustahiq->delete();
        return redirect()->route('mustahiqlainnya.index')->with('success', 'Mustahiq berhasil dihapus.');
    }

    public function laporan()
    {
        $mustahiqs = Mustahiq_Lainnya::all();
        $mustahiqs = Mustahiq_Lainnya::all();
        $uang=Mustahiq_Lainnya::where('JenisHak','Uang')->sum('Hak');
        $beras=Mustahiq_Lainnya::where('JenisHak','Beras')->sum('Hak');
        $KK=Mustahiq_Lainnya::count('nama');
        $fakir=Mustahiq_Lainnya::where('kategori','Fakir')->count('nama');
        $muallaf=Mustahiq_Lainnya::where('kategori','Muallaf')->count('nama');
        $Miskin=Mustahiq_Lainnya::where('kategori','Miskin')->count('nama');
        $fisabilillah=Mustahiq_Lainnya::where('kategori','Fii Sabilillah')->count('nama');
        $amil=Mustahiq_Lainnya::where('kategori','Amil')->count('nama');

        return view('laporan.mustahiqLain',compact('mustahiqs','uang','beras','KK','amil','fisabilillah','fakir','muallaf','Miskin'));
    }
}
