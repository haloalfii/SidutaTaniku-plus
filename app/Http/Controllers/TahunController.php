<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tahun.tahun', [
            'title' => 'Tahun',
            'table' => 'Tabel Tahun',
            'active' => 'data',
            'tahun' => Tahun::orderBy('tahun', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun.create-tahun', [
            'title' => 'Tambah Tahun',
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
        Tahun::create($validatedData);

        return redirect('/tahun')->with('success', 'Data Tahun sudah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun $tahun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahun = Tahun::findOrFail($id);
        return view('tahun.edit-tahun', [
            'title' => 'Edit Tahun',
            'active' => 'data',
            'tahun' => $tahun
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tahun $tahun)
    {
        $updateTahun = $request->validate([
            'tahun' => 'required'
        ]);

        Tahun::where('id', $tahun->id)->update($updateTahun);
        // $updateTahun->save();
        return redirect('/tahun')->with('update', 'Tahun berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tahun = Tahun::destroy($id);
        return redirect('/tahun')->with('success', 'Data Tahun berhasil dihapus!');
    }
}
