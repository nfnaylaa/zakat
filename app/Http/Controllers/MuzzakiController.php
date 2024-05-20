<?php

namespace App\Http\Controllers;

use App\Models\Muzzaki;
use Illuminate\Http\Request;

class MuzzakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzzakis = Muzzaki::all();
        return view('muzzakis.index', compact('muzzakis'),['tittle'=>"Muzzaki"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('muzzakis.create',['tittle'=>"Muzzaki"]);
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
            'nama' => 'required',
            'tanggungan' => 'required|integer',
            'keterangan' => 'required',
        ]);

        Muzzaki::create($validatedData);
        return redirect()->route('muzzakis.index')->with('success', 'Data Muzzaki berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Muzzaki  $muzzaki
     * @return \Illuminate\Http\Response
     */
    public function show(Muzzaki $muzzaki)
    {
        return view('muzzakis.show', compact('muzzaki'),['tittle'=>"Muzzaki"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muzzaki  $muzzaki
     * @return \Illuminate\Http\Response
     */
    public function edit(Muzzaki $muzzaki)
    {
        return view('muzzakis.edit', compact('muzzaki'),['tittle'=>"Muzzaki"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muzzaki  $muzzaki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muzzaki $muzzaki)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggungan' => 'required|integer',
            'keterangan' => 'required',
        ]);

        $muzzaki->update($validatedData);
        return redirect()->route('muzzakis.index')->with('success', 'Data Muzzaki berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muzzaki  $muzzaki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muzzaki $muzzaki)
    {
        $muzzaki->delete();
        return redirect()->route('muzzakis.index')->with('success', 'Data Muzzaki berhasil dihapus.');
    }
}
