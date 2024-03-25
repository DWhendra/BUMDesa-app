<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdesa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Models\UsahaDanUnitUsaha;
use Illuminate\Support\Facades\DB;

class UsahaDanUnitUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('usaha_dan_unit_usahas')
            ->join('bumdesas', 'usaha_dan_unit_usahas.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'usaha_dan_unit_usahas.id_user', '=', 'users.id')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            ->select('usaha_dan_unit_usahas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan','desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->get();
        return view('usaha-dan-unit-usaha.index', ['usaha' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usaha-dan-unit-usaha.create', ['dt' => Bumdesa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $databaru=UsahaDanUnitUsaha::create($request->all());

        $usahadanunitusaha=UsahaDanUnitUsaha::where("id",$databaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $usahadanunitusaha->nilai_1_a+
        $usahadanunitusaha->nilai_1_b+
        $usahadanunitusaha->nilai_2_a+
        $usahadanunitusaha->nilai_2_b+
        $usahadanunitusaha->nilai_3_a+
        $usahadanunitusaha->nilai_3_b+
        $usahadanunitusaha->nilai_4_a+
        $usahadanunitusaha->nilai_4_b+
        $usahadanunitusaha->nilai_4_c+
        $usahadanunitusaha->nilai_4_d+
        $usahadanunitusaha->nilai_5_a+
        $usahadanunitusaha->nilai_5_b+
        $usahadanunitusaha->nilai_6_a+
        $usahadanunitusaha->nilai_6_b+
        $usahadanunitusaha->nilai_6_c+
        $usahadanunitusaha->nilai_6_d
        ;
        $usahadanunitusaha->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(15/100)]);
        return redirect()->route("usaha-dan-unit-usaha.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        $joinedData = DB::table('usaha_dan_unit_usahas')
            ->join('bumdesas', 'usaha_dan_unit_usahas.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'usaha_dan_unit_usahas.id_user', '=', 'users.id')
            ->select('usaha_dan_unit_usahas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('usaha_dan_unit_usahas.id', $usahaDanUnitUsaha->id)
            ->first();
        return view('usaha-dan-unit-usaha.show', ['dt'=>$joinedData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        $joinedData = DB::table('usaha_dan_unit_usahas')
        ->join('bumdesas', 'usaha_dan_unit_usahas.id_bumdesa', '=', 'bumdesas.id')
        ->join('users', 'usaha_dan_unit_usahas.id_user', '=', 'users.id')
        ->select('usaha_dan_unit_usahas.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
        ->where('usaha_dan_unit_usahas.id', $usahaDanUnitUsaha->id)
        ->first();
        return view('usaha-dan-unit-usaha.edit', ['dt'=>$joinedData]);
    }
    public function detail($id_bumdesa,$tahun)
    {
        $data = UsahaDanUnitUsaha::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();

        return view('usaha-dan-unit-usaha.detail', ['dt'=>$data]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        $usahaDanUnitUsaha->update($request->all());

        $usahaDanUnitUsahaupdate=UsahaDanUnitUsaha::where("id",$usahaDanUnitUsaha->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $usahaDanUnitUsaha->nilai_1_a+
        $usahaDanUnitUsaha->nilai_1_b+
        $usahaDanUnitUsaha->nilai_2_a+
        $usahaDanUnitUsaha->nilai_2_b+
        $usahaDanUnitUsaha->nilai_3_a+
        $usahaDanUnitUsaha->nilai_3_b+
        $usahaDanUnitUsaha->nilai_4_a+
        $usahaDanUnitUsaha->nilai_4_b+
        $usahaDanUnitUsaha->nilai_4_c+
        $usahaDanUnitUsaha->nilai_4_d+
        $usahaDanUnitUsaha->nilai_5_a+
        $usahaDanUnitUsaha->nilai_5_b+
        $usahaDanUnitUsaha->nilai_6_a+
        $usahaDanUnitUsaha->nilai_6_b+
        $usahaDanUnitUsaha->nilai_6_c+
        $usahaDanUnitUsaha->nilai_6_d
        ;
        $usahaDanUnitUsahaupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(15/100)]);
        return redirect()->route("usaha-dan-unit-usaha.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        $usahaDanUnitUsaha->delete();
        return redirect()->route('usaha-dan-unit-usaha.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
