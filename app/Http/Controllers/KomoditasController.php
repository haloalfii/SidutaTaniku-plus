<?php

namespace App\Http\Controllers;

use App\Models\Komoditas;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('komoditas.komoditas', [
            'title' => 'Komoditas',
            'table' => 'Tabel Komoditas',
            'active' => 'data',
            'komoditas' => Komoditas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komoditas.create-komoditas', [
            'title' => 'Tambah Komoditas',
            'active' => 'data'
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
        $validatedData = $request->all();
        Komoditas::create($validatedData);

        return redirect('/komoditas')->with('success', 'Data Komoditas sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function show(Komoditas $komoditas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komoditas = Komoditas::findOrFail($id);
        return view('komoditas.edit-komoditas', [
            'title' => 'Edit Komoditas',
            'active' => 'data',
            'komoditas' => $komoditas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komoditas $komoditas, $id)
    {
        $updateKomoditas = Komoditas::findOrFail($id);
        $updateKomoditas->nama_komoditas = $request->get('nama_komoditas');
        $updateKomoditas->jenis_komoditas = $request->get('jenis_komoditas');

        $updateKomoditas->save();
        return redirect('/komoditas')->with('update', 'Komoditas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komoditas = Komoditas::destroy($id);
        return redirect('/komoditas')->with('success', 'Data Komoditas berhasil dihapus!');
    }
}
