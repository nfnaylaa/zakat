<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Kategori_Mustahiq;

class KategoriMustahiqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriMustahiqs = Kategori_Mustahiq::all();
        return view('kategori_mustahiqs.index', compact('kategoriMustahiqs'),[
            'tittle'=>"Kategori"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_mustahiqs.create',[
            'tittle'=>"Kategori"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'hakBeras' => 'required',
            'hakUang' => 'required',
        ]);

        Kategori_Mustahiq::create($validatedData);
        return redirect()->route('kategori-mustahiqs.index')->with('success', 'Data Kategori Mustahiq berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriMustahiq  $kategoriMustahiq
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori_Mustahiq $kategoriMustahiq)
    {
        return view('kategori_mustahiqs.show', compact('kategoriMustahiq'),[
            'tittle'=>"Kategori"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriMustahiq  $kategoriMustahiq
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori_Mustahiq $kategoriMustahiq)
    {
        return view('kategori_mustahiqs.edit', compact('kategoriMustahiq'),[
            'tittle'=>"Kategori"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriMustahiq  $kategoriMustahiq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori_Mustahiq $kategoriMustahiq)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
            'hakBeras' => 'required',
            'hakUang' => 'required',
        ]);

        $kategoriMustahiq->update($validatedData);
        return redirect()->route('kategori-mustahiqs.index')->with('success', 'Data Kategori Mustahiq berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriMustahiq  $kategoriMustahiq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori_Mustahiq $kategoriMustahiq)
    {
        $kategoriMustahiq->delete();
        return redirect()->route('kategori-mustahiqs.index')->with('success', 'Data Kategori Mustahiq berhasil dihapus.');
    }
}
