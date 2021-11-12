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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Komoditas $komoditas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komoditas $komoditas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komoditas  $komoditas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komoditas $komoditas)
    {
        //
    }
}
