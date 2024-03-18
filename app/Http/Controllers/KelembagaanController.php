<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Kecamatan;
use App\Models\kelembagaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelembagaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('kelembagaans')
                ->join('kecamatans', 'kelembagaans.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'kelembagaans.id_desa', '=', 'desas.id')
                ->join('users', 'kelembagaans.id_user', '=', 'users.id')
                ->select('kelembagaans.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('kelembagaan.index', ['kelembagaans' => $joinedData,'isSearching'=>false]);
    }
    public function coba()
    {
        $coba=Kelembagaan::where("id_bumdesa",1)->first();
        $hasilnilai=$coba->nilai_1_a+$coba->nilai_1_b;
        return $hasilnilai;

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelembagaan.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelembagaanbaru=Kelembagaan::create($request->all());

        $kelembagaan=Kelembagaan::where("id",$kelembagaanbaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $kelembagaan->nilai_1_a+
        $kelembagaan->nilai_1_b+
        $kelembagaan->nilai_1_c+
        $kelembagaan->nilai_2_a+
        $kelembagaan->nilai_2_b+
        $kelembagaan->nilai_2_c+
        $kelembagaan->nilai_3_a+
        $kelembagaan->nilai_3_b+
        $kelembagaan->nilai_4_a+
        $kelembagaan->nilai_4_b+
        $kelembagaan->nilai_5_aa+
        $kelembagaan->nilai_5_ab+
        $kelembagaan->nilai_5_ac+
        $kelembagaan->nilai_5_ba+
        $kelembagaan->nilai_5_bb+
        $kelembagaan->nilai_5_bc+
        $kelembagaan->nilai_5_ca+
        $kelembagaan->nilai_5_cb+
        $kelembagaan->nilai_5_cc
        ;
        $kelembagaan->update(['total_nilai'=>$hasilnilai]);
        return redirect()->route("kelembagaan.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelembagaan $kelembagaan)
    {
        $joinedData = DB::table('kelembagaans')
            ->join('kecamatans', 'kelembagaans.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'kelembagaans.id_desa', '=', 'desas.id')
            ->select('kelembagaans.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('kelembagaans.id', $kelembagaan->id)
            ->get();
        return view('kelembagaan.show', ['dt'=>$joinedData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelembagaan $kelembagaan)
    {
        return view('kelembagaan.edit', ['dt'=>$kelembagaan,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelembagaan $kelembagaan)
    {
        $kelembagaan->update($request->all());

        $kelembagaanupdate=Kelembagaan::where("id",$kelembagaan->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $kelembagaan->nilai_1_a+
        $kelembagaan->nilai_1_b+
        $kelembagaan->nilai_1_c+
        $kelembagaan->nilai_2_a+
        $kelembagaan->nilai_2_b+
        $kelembagaan->nilai_2_c+
        $kelembagaan->nilai_3_a+
        $kelembagaan->nilai_3_b+
        $kelembagaan->nilai_4_a+
        $kelembagaan->nilai_4_b+
        $kelembagaan->nilai_5_aa+
        $kelembagaan->nilai_5_ab+
        $kelembagaan->nilai_5_ac+
        $kelembagaan->nilai_5_ba+
        $kelembagaan->nilai_5_bb+
        $kelembagaan->nilai_5_bc+
        $kelembagaan->nilai_5_ca+
        $kelembagaan->nilai_5_cb+
        $kelembagaan->nilai_5_cc
        ;
        $kelembagaanupdate->update(['total_nilai'=>$hasilnilai]);
        return redirect()->route("kelembagaan.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelembagaan $kelembagaan)
    {
        $kelembagaan->delete();
        return redirect()->route('kelembagaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
