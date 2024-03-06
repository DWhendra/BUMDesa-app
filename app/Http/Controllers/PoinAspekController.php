<?php

namespace App\Http\Controllers;

use App\Models\PoinAspek;
use Illuminate\Http\Request;

class PoinAspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("evaluasi.poin_aspek.index", ["poin_aspek"=> PoinAspek::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("evaluasi.poin_aspek.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PoinAspek::create($request->all());
        return redirect()->route("poin_aspek.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(PoinAspek $poinAspek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PoinAspek $poinAspek)
    {
        return view("evaluasi.poin_aspek.edit", ['poinaspek'=>$poinAspek]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PoinAspek $poinAspek)
    {
        $poinAspek->update($request->all());

        return redirect()->route('poin_aspek.index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PoinAspek $poinAspek)
    {
        $poinAspek->delete();
        return redirect()->route("poin_aspek.index");
    }
}
