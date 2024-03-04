<?php

namespace App\Http\Controllers;

use App\Models\SubkategoriAspek;
use Illuminate\Http\Request;

class SubkategoriAspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("evaluasi.subkategori_aspek.index", ["subkategori_aspek"=> SubkategoriAspek::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(SubkategoriAspek $subkategoriAspek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubkategoriAspek $subkategoriAspek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubkategoriAspek $subkategoriAspek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubkategoriAspek $subkategoriAspek)
    {
        //
    }
}
