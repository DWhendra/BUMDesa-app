<?php

namespace App\Http\Controllers;

use App\Models\ALKA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ALKAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('alkas')
                ->join('kecamatans', 'alkas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'alkas.id_desa', '=', 'desas.id')
                ->join('users', 'alkas.id_user', '=', 'users.id')
                ->select('alkas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('alka.index', ['data' => $joinedData,'isSearching'=>false]);
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
    public function show(ALKA $aLKA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ALKA $aLKA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ALKA $aLKA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ALKA $aLKA)
    {
        //
    }
}
