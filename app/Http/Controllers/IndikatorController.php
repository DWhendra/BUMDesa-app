<?php

namespace App\Http\Controllers;

use App\Models\Indikator;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("evaluasi.indikator.index", ["indikators"=> Indikator::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("evaluasi.indikator.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Indikator::create($request->all());
        return redirect()->route("indikator.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indikator $indikator)
    {
        return view("evaluasi.indikator.edit", ['indikator'=>$indikator]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indikator $indikator)
    {
        $indikator->update($request->all());

        return redirect()->route('indikator.index')->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        $indikator->delete();
        return redirect()->route("indikator.index");
    }
}
