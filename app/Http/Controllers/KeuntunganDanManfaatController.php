<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\KeuntunganDanManfaat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeuntunganDanManfaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('keuntungan_dan_manfaats')
                ->join('kecamatans', 'keuntungan_dan_manfaats.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'keuntungan_dan_manfaats.id_desa', '=', 'desas.id')
                ->join('users', 'keuntungan_dan_manfaats.id_user', '=', 'users.id')
                ->select('keuntungan_dan_manfaats.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('keuntungan-dan-manfaat.index', ['data' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keuntungan-dan-manfaat.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $databaru=KeuntunganDanManfaat::create($request->all());
        $keuntungandanmanfaat=KeuntunganDanManfaat::where("id",$databaru->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $keuntungandanmanfaat->nilai_1_a+
        $keuntungandanmanfaat->nilai_1_b+
        $keuntungandanmanfaat->nilai_1_c+
        $keuntungandanmanfaat->nilai_1_d+
        $keuntungandanmanfaat->nilai_1_e+
        $keuntungandanmanfaat->nilai_2_a+
        $keuntungandanmanfaat->nilai_2_b+
        $keuntungandanmanfaat->nilai_2_c+
        $keuntungandanmanfaat->nilai_2_d+
        $keuntungandanmanfaat->nilai_3_a+
        $keuntungandanmanfaat->nilai_3_b+
        $keuntungandanmanfaat->nilai_3_c+
        $keuntungandanmanfaat->nilai_3_d
        ;
        $keuntungandanmanfaat->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(20/100)]);
        return redirect()->route("keuntungan-dan-manfaat.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(KeuntunganDanManfaat $keuntungan_dan_manfaat)
    {
        $joinedData = DB::table('keuntungan_dan_manfaats')
            ->join('kecamatans', 'keuntungan_dan_manfaats.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'keuntungan_dan_manfaats.id_desa', '=', 'desas.id')
            ->select('keuntungan_dan_manfaats.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('keuntungan_dan_manfaats.id', $keuntungan_dan_manfaat->id)
            ->first();
        return view('keuntungan-dan-manfaat.show', ['dt'=>$joinedData,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeuntunganDanManfaat $keuntungan_dan_manfaat)
    {
        return view('keuntungan-dan-manfaat.edit', ['dt'=>$keuntungan_dan_manfaat,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeuntunganDanManfaat $keuntungan_dan_manfaat)
    {
        $keuntungan_dan_manfaat->update($request->all());

        $keuntungandanmanfaatupdate=KeuntunganDanManfaat::where("id",$keuntungan_dan_manfaat->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $keuntungan_dan_manfaat->nilai_1_a+
        $keuntungan_dan_manfaat->nilai_1_b+
        $keuntungan_dan_manfaat->nilai_1_c+
        $keuntungan_dan_manfaat->nilai_1_d+
        $keuntungan_dan_manfaat->nilai_1_e+
        $keuntungan_dan_manfaat->nilai_2_a+
        $keuntungan_dan_manfaat->nilai_2_b+
        $keuntungan_dan_manfaat->nilai_2_c+
        $keuntungan_dan_manfaat->nilai_2_d+
        $keuntungan_dan_manfaat->nilai_3_a+
        $keuntungan_dan_manfaat->nilai_3_b+
        $keuntungan_dan_manfaat->nilai_3_c+
        $keuntungan_dan_manfaat->nilai_3_d
        ;
        $keuntungandanmanfaatupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(20/100)]);
        return redirect()->route("keuntungan-dan-manfaat.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeuntunganDanManfaat $keuntungan_dan_manfaat)
    {
        $keuntungan_dan_manfaat->delete();
        return redirect()->route('keuntungan-dan-manfaat.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
