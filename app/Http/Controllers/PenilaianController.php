<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use App\Models\KategoriAspek;
use App\Models\Penilaian;
use App\Models\SubkategoriAspek;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penilaian.create', ['indikator' => Indikator::all(),'kategori_aspek' => KategoriAspek::all(),'subkategori_aspek' => SubkategoriAspek::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
    public function subkategoriaspek($id_opsi)
    {
        $subkategori_aspek = SubkategoriAspek::where('id_kategori_aspek', $id_opsi)->get();
        return response()->json($subkategori_aspek);
    }
}
