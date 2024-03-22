<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\User;
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
                ->join('kecamatans', 'usaha_dan_unit_usahas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'usaha_dan_unit_usahas.id_desa', '=', 'desas.id')
                ->join('users', 'usaha_dan_unit_usahas.id_user', '=', 'users.id')
                ->select('usaha_dan_unit_usahas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('usaha-dan-unit-usaha.index', ['usaha' => $joinedData,'isSearching'=>false]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usaha-dan-unit-usaha.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
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
        $usahadanunitusaha->update(['total_nilai'=>$hasilnilai]);
        return redirect()->route("usaha-dan-unit-usaha.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        $joinedData = DB::table('usaha_dan_unit_usahas')
            ->join('kecamatans', 'usaha_dan_unit_usahas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'usaha_dan_unit_usahas.id_desa', '=', 'desas.id')
            ->select('usaha_dan_unit_usahas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('usaha_dan_unit_usahas.id', $usahaDanUnitUsaha->id)
            ->first();
        return view('usaha-dan-unit-usaha.show', ['dt'=>$joinedData,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsahaDanUnitUsaha $usahaDanUnitUsaha)
    {
        return view('usaha-dan-unit-usaha.edit', ['dt'=>$usahaDanUnitUsaha,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
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
        $usahaDanUnitUsahaupdate->update(['total_nilai'=>$hasilnilai]);
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
