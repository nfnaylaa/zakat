<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Muzzaki;
use App\Models\Mustahiq;
use Illuminate\Http\Request;
use App\Models\Kategori_Mustahiq;

class MustahiqController extends Controller
{
    public function index()
    {
        $mustahiqs = Mustahiq::all();
        return view('mustahiqs.index', compact('mustahiqs'), [
            'tittle' => 'Distribusi'
        ]);
    }

    public function create()
    {
        $kategoriMustahiqs = Kategori_Mustahiq::all();
        $muzzakis = Muzzaki::all();
        return view('mustahiqs.create', compact('kategoriMustahiqs', 'muzzakis'), [
            'tittle' => 'Distribusi'
        ]);
    }

    public function store(Request $request)
    {
        $muzzaki = Muzzaki::find($request->muzzaki);
        $kategoriMustahiq = Kategori_Mustahiq::find($request->kategori);

        $mustahiq = new Mustahiq;
        $mustahiq->nama = $muzzaki->nama;
        $mustahiq->Kategori = $kategoriMustahiq->kategori;
        $mustahiq->Hak = $request->hak;
        $mustahiq->jenisHak = $request->jenisHak;
        $mustahiq->muzzaki_id = $muzzaki->id;
        $mustahiq->save();

        return redirect()->route('mustahiqs.index')->with('success', 'Mustahiq berhasil ditambahkan.');
    }

    public function show(Mustahiq $mustahiq)
    {
        return view('mustahiqs.show', compact('mustahiq'), [
            'tittle' => 'Distribusi'
        ]);
    }

    public function edit(Mustahiq $mustahiq)
    {
        $muzzakis = Muzzaki::all();
        $kategoriMustahiqs = Kategori_Mustahiq::all();
        return view('mustahiqs.edit', compact('mustahiq', 'muzzakis', 'kategoriMustahiqs'), [
            'tittle' => 'Distribusi'
        ]);
    }

    public function update(Request $request, Mustahiq $mustahiq)
    {
        $muzzaki = Muzzaki::find($request->muzzaki);
        $kategoriMustahiq = Kategori_Mustahiq::find($request->kategori);

        $mustahiq->nama = $muzzaki->nama;
        $mustahiq->Kategori = $kategoriMustahiq->kategori;
        $mustahiq->Hak = $request->hak;
        $mustahiq->jenisHak = $request->jenisHak;
        $mustahiq->muzzaki_id = $muzzaki->id;
        $mustahiq->save();

        return redirect()->route('mustahiqs.index')->with('success', 'Mustahiq berhasil diperbarui.');
    }

    public function destroy(Mustahiq $mustahiq)
    {
        $mustahiq->delete();

        return redirect()->route('mustahiqs.index')->with('success', 'Mustahiq berhasil dihapus.');
    }


            public function downloadPDF()
            {
                $mustahiqs = Mustahiq::all();
                $uang=Mustahiq::where('JenisHak','Uang')->sum('Hak');
                $beras=Mustahiq::where('JenisHak','Beras')->sum('Hak');
                $KK=Mustahiq::count('nama');
                $fakir=Mustahiq::where('kategori','Fakir')->count('nama');
                $muallaf=Mustahiq::where('kategori','Muallaf')->count('nama');
                $Miskin=Mustahiq::where('kategori','Miskin')->count('nama');
                $fisabilillah=Mustahiq::where('kategori','Fii Sabilillah')->count('nama');
                $amil=Mustahiq::where('kategori','Amil')->count('nama');
            
               // $pdfOptions = new Options();
                // $pdfOptions->set('defaultFont', 'Arial');
            
                // $dompdf = new Dompdf($pdfOptions);
            
                // $html = view('laporan.mustahiqWarga', compact('mustahiqs'))->render();
                // $dompdf->loadHtml($html);
            
                // $dompdf->setPaper('A4', 'portrait');
            
                // $dompdf->render();
            
                // $dompdf->stream('daftar_mustahiq.pdf', ['Attachment' => false]);

                return view('laporan.mustahiqWarga',compact('mustahiqs','uang','beras','KK','amil','fisabilillah','fakir','muallaf','Miskin'));
            }
            


    
}
