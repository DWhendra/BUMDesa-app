<?php

namespace App\Http\Controllers;

use App\Models\ALKA;
use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdesa;
use App\Models\Kecamatan;
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
            ->join('bumdesas', 'alkas.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'alkas.id_user', '=', 'users.id')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            ->select('alkas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan','desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->get();
            return view('alka.index', ['data' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alka.create', ['dt' => Bumdesa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alkabaru=ALKA::create($request->all());

        $alka=ALKA::where("id",$alkabaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $alka->nilai_1_a+
        $alka->nilai_1_b+
        $alka->nilai_1_c+
        $alka->nilai_1_d+
        $alka->nilai_2_a+
        $alka->nilai_2_b+
        $alka->nilai_2_c+
        $alka->nilai_2_d+
        $alka->nilai_3_a+
        $alka->nilai_3_b+
        $alka->nilai_3_c+
        $alka->nilai_4_a+
        $alka->nilai_4_b+
        $alka->nilai_5_a+
        $alka->nilai_5_b
        ;
        $alka->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("alka.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(ALKA $alka)
    {
        $joinedData = DB::table('alkas')
        ->join('bumdesas', 'alkas.id_bumdesa', '=', 'bumdesas.id')
        ->join('users', 'alkas.id_user', '=', 'users.id')
        ->select('alkas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
        ->where('alkas.id', $alka->id)
        ->first();
        return view('alka.show', ['dt'=>$joinedData]);
    }
    public function detail($id_bumdesa,$tahun)
    {
        $data = ALKA::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();

        return view('alka.detail', ['dt'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ALKA $alka)
    {
        $joinedData = DB::table('alkas')
            ->join('bumdesas', 'alkas.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'alkas.id_user', '=', 'users.id')
            ->select('alkas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('alkas.id', $alka->id)
            ->first();
        return view('alka.edit', ['dt'=>$joinedData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ALKA $alka)
    {
        $alka->update($request->all());

        $kelembagaanupdate=ALKA::where("id",$alka->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $alka->nilai_1_a+
        $alka->nilai_1_b+
        $alka->nilai_1_c+
        $alka->nilai_1_d+
        $alka->nilai_2_a+
        $alka->nilai_2_b+
        $alka->nilai_2_c+
        $alka->nilai_2_d+
        $alka->nilai_3_a+
        $alka->nilai_3_b+
        $alka->nilai_3_c+
        $alka->nilai_4_a+
        $alka->nilai_4_b+
        $alka->nilai_5_a+
        $alka->nilai_5_b
        ;
        $kelembagaanupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("alka.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ALKA $alka)
    {
        $alka->delete();
        return redirect()->route('alka.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
