<?php

namespace App\Http\Controllers;

use App\Models\Bumdesa;
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
                ->join('bumdesas', 'kelembagaans.id_bumdesa', '=', 'bumdesas.id')
                ->join('users', 'kelembagaans.id_user', '=', 'users.id')
                ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
                ->select('kelembagaans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan','desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
                ->get();
            return view('kelembagaan.index', ['kelembagaans' => $joinedData,'isSearching'=>false]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelembagaan.create', ['dt' => Bumdesa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelembagaanbaru=Kelembagaan::create($request->all());
        $kelembagaan=Kelembagaan::where("id",$kelembagaanbaru->id)->first();
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
        $kelembagaan->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);

        return redirect()->route("kelembagaan.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelembagaan $kelembagaan)
    {
        $joinedData = DB::table('kelembagaans')
            ->join('bumdesas', 'kelembagaans.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'kelembagaans.id_user', '=', 'users.id')
            ->select('kelembagaans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('kelembagaans.id', $kelembagaan->id)
            ->first();
        return view('kelembagaan.show', ['dt'=>$joinedData]);
    }
    public function detail($id_bumdesa,$tahun)
    {
        $data = Kelembagaan::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();

        return view('kelembagaan.detail', ['dt'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelembagaan $kelembagaan)
    {
        $joinedData = DB::table('kelembagaans')
            ->join('bumdesas', 'kelembagaans.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'kelembagaans.id_user', '=', 'users.id')
            ->select('kelembagaans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('kelembagaans.id', $kelembagaan->id)
            ->first();
        return view('kelembagaan.edit', ['dt'=>$joinedData]);
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
        $kelembagaanupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
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
