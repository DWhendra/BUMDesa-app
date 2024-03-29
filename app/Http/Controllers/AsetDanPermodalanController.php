<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdesa;
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
            ->join('bumdesas', 'aset_dan_permodalans.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'aset_dan_permodalans.id_user', '=', 'users.id')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            ->select('aset_dan_permodalans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan','desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->get();
            return view('aset-dan-permodalan.index', ['data' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aset-dan-permodalan.create', ['dt' => Bumdesa::all()]);
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
        return redirect()->route("aset-dan-permodalan.index")->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AsetDanPermodalan $asetDanPermodalan)
    {
        $joinedData = DB::table('aset_dan_permodalans')
            ->join('bumdesas', 'aset_dan_permodalans.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'aset_dan_permodalans.id_user', '=', 'users.id')
            ->select('aset_dan_permodalans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('aset_dan_permodalans.id', $asetDanPermodalan->id)
            ->first();
        return view('aset-dan-permodalan.show', ['dt'=>$joinedData]);
    }
    public function detail($id_bumdesa,$tahun)
    {
        $data = AsetDanPermodalan::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();

        return view('aset-dan-permodalan.detail', ['dt'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsetDanPermodalan $asetDanPermodalan)
    {
        $joinedData = DB::table('aset_dan_permodalans')
            ->join('bumdesas', 'aset_dan_permodalans.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'aset_dan_permodalans.id_user', '=', 'users.id')
            ->select('aset_dan_permodalans.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('aset_dan_permodalans.id', $asetDanPermodalan->id)
            ->first();
        return view('aset-dan-permodalan.edit', ['dt'=>$joinedData]);
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
        return redirect()->route("aset-dan-permodalan.index")->with('success','Data Berhasil Disimpan!');
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
