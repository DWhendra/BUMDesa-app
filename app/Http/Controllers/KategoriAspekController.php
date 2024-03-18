<?php

namespace App\Http\Controllers;

use App\Models\KategoriAspek;
use Illuminate\Http\Request;

class KategoriAspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("evaluasi.kategori_aspek.index", ["kategoriaspek"=> KategoriAspek::all()]);
    }


    public function kategori(){
        return response()->json([
            'data'=> KategoriAspek::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("evaluasi.kategori_aspek.create"); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KategoriAspek::create($request->all());
        return redirect()->route("kategori_aspek.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriAspek $kategoriAspek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriAspek $kategoriAspek)
    {
        return view("evaluasi.kategori_aspek.edit", ['kategoriaspek'=>$kategoriAspek]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriAspek $kategoriAspek)
    {
        $kategoriAspek->update($request->all());

        return redirect()->route('kategori_aspek.index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriAspek $kategoriAspek)
    {
        $kategoriAspek->delete();
        return redirect()->route("kategori_aspek.index");
    }
}
