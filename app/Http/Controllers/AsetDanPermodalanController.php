<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Models\AsetDanPermodalan;
use Illuminate\Support\Facades\DB;

class AsetDanPermodalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('aset_dan_permodalans')
                ->join('kecamatans', 'aset_dan_permodalans.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'aset_dan_permodalans.id_desa', '=', 'desas.id')
                ->join('users', 'aset_dan_permodalans.id_user', '=', 'users.id')
                ->select('aset_dan_permodalans.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('aset-dan-permodalan.index', ['data' => $joinedData,'isSearching'=>false]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aset-dan-permodalan.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $databaru=AsetDanPermodalan::create($request->all());

        $asetDanPermodalan=AsetDanPermodalan::where("id",$databaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $asetDanPermodalan->nilai_1_a+
        $asetDanPermodalan->nilai_1_b+
        $asetDanPermodalan->nilai_1_c+
        $asetDanPermodalan->nilai_2_a+
        $asetDanPermodalan->nilai_2_b+
        $asetDanPermodalan->nilai_2_c+
        $asetDanPermodalan->nilai_2_d
        ;
        $asetDanPermodalan->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("aset-dan-permodalan.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(AsetDanPermodalan $asetDanPermodalan)
    {
        $joinedData = DB::table('aset_dan_permodalans')
            ->join('kecamatans', 'aset_dan_permodalans.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'aset_dan_permodalans.id_desa', '=', 'desas.id')
            ->select('aset_dan_permodalans.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('aset_dan_permodalans.id', $asetDanPermodalan->id)
            ->first();
        return view('aset-dan-permodalan.show', ['dt'=>$joinedData,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsetDanPermodalan $asetDanPermodalan)
    {
        return view('aset-dan-permodalan.edit', ['dt'=>$asetDanPermodalan,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AsetDanPermodalan $asetDanPermodalan)
    {
        $asetDanPermodalan->update($request->all());

        $asetDanPermodalanupdate=AsetDanPermodalan::where("id",$asetDanPermodalan->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $asetDanPermodalan->nilai_1_a+
        $asetDanPermodalan->nilai_1_b+
        $asetDanPermodalan->nilai_1_c+
        $asetDanPermodalan->nilai_2_a+
        $asetDanPermodalan->nilai_2_b+
        $asetDanPermodalan->nilai_2_c+
        $asetDanPermodalan->nilai_2_d
        ;
        $asetDanPermodalanupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("aset-dan-permodalan.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsetDanPermodalan $asetDanPermodalan)
    {
        $asetDanPermodalan->delete();
        return redirect()->route('aset-dan-permodalan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
