<?php

namespace App\Http\Controllers;

use App\Models\Bayar_Zakat;
use App\Models\Muzzaki;
use Illuminate\Http\Request;

class BayarZakatController extends Controller
{
    public function index()
    {
        $bayarZakats = Bayar_Zakat::with('muzzaki')->get();

        return view('bayarzakats.index', compact('bayarZakats'),['tittle'=>"Bayar Zakat"]);
    }

    public function create()
    {
        $muzzakis = Muzzaki::all();

        return view('bayarzakats.create', compact('muzzakis'),['tittle'=>"Bayar Zakat"]);
    }

    public function store(Request $request)
    {
        $muzzaki = Muzzaki::find($request->muzzaki_id);
        $jenisBayar = $request->jenis_bayar;
        $tanggunganDibayar = $request->tanggungan_dibayar;

        $bayarZakat = new Bayar_Zakat;
        $bayarZakat->muzzaki_id = $muzzaki->id;
        $bayarZakat->nama_KK = $muzzaki->nama;
        $bayarZakat->tanggungan = $muzzaki->tanggungan;

        if ($jenisBayar === 'beras') {
            $bayarZakat->jenis_bayar = 'Beras';
            $bayarZakat->Beras = $tanggunganDibayar * 2.5;
        } elseif ($jenisBayar === 'uang') {
            $bayarZakat->jenis_bayar = 'Uang';
            $bayarZakat->Uang = $tanggunganDibayar * 25000;
        }

        $bayarZakat->tanggungan_dibayar = $tanggunganDibayar;
        $bayarZakat->save();

        return redirect()->route('bayarzakats.index')->with('success', 'Pembayaran zakat berhasil ditambahkan.');
    }

    public function show(Bayar_Zakat $bayarZakat)
    {
        return view('bayarzakats.show', compact('bayarZakat'),['tittle'=>"Bayar Zakat"]);
    }

    public function edit(Bayar_Zakat $bayarZakat)
    {
        $muzzakis = Muzzaki::all();

        return view('bayarzakats.edit', compact('bayarZakat', 'muzzakis'),['tittle'=>"Bayar Zakat"]);
    }

    public function update(Request $request, Bayar_Zakat $bayarZakat)
    {
    
        $muzzaki = Muzzaki::find($request->muzzaki_id);
        $jenisBayar = $request->jenis_bayar;
        $tanggunganDibayar = $request->tanggungan_dibayar;

        $bayarZakat->muzzaki_id = $muzzaki->id;
        $bayarZakat->nama_KK = $muzzaki->nama;
        $bayarZakat->tanggungan = $muzzaki->tanggungan;

        if ($jenisBayar === 'beras') {
            $bayarZakat->jenis_bayar = 'Beras';
            $bayarZakat->Beras = $tanggunganDibayar * 2.5;
            $bayarZakat->Uang = null;
        } elseif ($jenisBayar === 'uang') {
            $bayarZakat->jenis_bayar = 'Uang';
            $bayarZakat->Uang = $tanggunganDibayar * 25000;
            $bayarZakat->Beras = null;
        }

        $bayarZakat->tanggungan_dibayar = $tanggunganDibayar;
        $bayarZakat->save();

        return redirect()->route('bayarzakats.index')->with('success', 'Pembayaran zakat berhasil diperbarui.');
    }

    public function destroy(Bayar_Zakat $bayarZakat)
    {
        $bayarZakat->delete();

        return redirect()->route('bayarzakats.index')->with('success', 'Pembayaran zakat berhasil dihapus.');
    }
}
