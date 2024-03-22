<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KerjasamaDanInovasi;

class KerjasamaDanInovasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('kerjasama_dan_inovasis')
                ->join('kecamatans', 'kerjasama_dan_inovasis.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'kerjasama_dan_inovasis.id_desa', '=', 'desas.id')
                ->join('users', 'kerjasama_dan_inovasis.id_user', '=', 'users.id')
                ->select('kerjasama_dan_inovasis.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('kerjasama-dan-inovasi.index', ['data' => $joinedData,'isSearching'=>false]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kerjasama-dan-inovasi.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $databaru=KerjasamaDanInovasi::create($request->all());

        $kerjasamadaninovasi=KerjasamaDanInovasi::where("id",$databaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $kerjasamadaninovasi->nilai_1_a+
        $kerjasamadaninovasi->nilai_1_b+
        $kerjasamadaninovasi->nilai_2_a+
        $kerjasamadaninovasi->nilai_2_b+
        $kerjasamadaninovasi->nilai_3_a+
        $kerjasamadaninovasi->nilai_3_b+
        $kerjasamadaninovasi->nilai_4_a+
        $kerjasamadaninovasi->nilai_4_b+
        $kerjasamadaninovasi->nilai_5_a+
        $kerjasamadaninovasi->nilai_5_b+
        $kerjasamadaninovasi->nilai_5_c+
        $kerjasamadaninovasi->nilai_5_d+
        $kerjasamadaninovasi->nilai_5_e+
        $kerjasamadaninovasi->nilai_5_f
        ;
        $kerjasamadaninovasi->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(25/100)]);
        return redirect()->route("kerjasama-dan-inovasi.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(KerjasamaDanInovasi $kerjasamaDanInovasi)
    {
        $joinedData = DB::table('kerjasama_dan_inovasis')
            ->join('kecamatans', 'kerjasama_dan_inovasis.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'kerjasama_dan_inovasis.id_desa', '=', 'desas.id')
            ->select('kerjasama_dan_inovasis.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('kerjasama_dan_inovasis.id', $kerjasamaDanInovasi->id)
            ->first();
        return view('kerjasama-dan-inovasi.show', ['dt'=>$joinedData,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KerjasamaDanInovasi $kerjasamaDanInovasi)
    {
        return view('kerjasama-dan-inovasi.edit', ['dt'=>$kerjasamaDanInovasi,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KerjasamaDanInovasi $kerjasamaDanInovasi)
    {
        $kerjasamaDanInovasi->update($request->all());

        $kerjasamaDanInovasiupdate=KerjasamaDanInovasi::where("id",$kerjasamaDanInovasi->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $kerjasamaDanInovasi->nilai_1_a+
        $kerjasamaDanInovasi->nilai_1_b+
        $kerjasamaDanInovasi->nilai_2_a+
        $kerjasamaDanInovasi->nilai_2_b+
        $kerjasamaDanInovasi->nilai_3_a+
        $kerjasamaDanInovasi->nilai_3_b+
        $kerjasamaDanInovasi->nilai_4_a+
        $kerjasamaDanInovasi->nilai_4_b+
        $kerjasamaDanInovasi->nilai_5_a+
        $kerjasamaDanInovasi->nilai_5_b+
        $kerjasamaDanInovasi->nilai_5_c+
        $kerjasamaDanInovasi->nilai_5_d+
        $kerjasamaDanInovasi->nilai_5_e+
        $kerjasamaDanInovasi->nilai_5_f
        ;
        $kerjasamaDanInovasiupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(25/100)]);
        return redirect()->route("kerjasama-dan-inovasi.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KerjasamaDanInovasi $kerjasamaDanInovasi)
    {
        $kerjasamaDanInovasi->delete();
        return redirect()->route('kerjasama-dan-inovasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
