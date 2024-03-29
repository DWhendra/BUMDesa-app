<?php

namespace App\Http\Controllers;

use App\Models\Bumdesa;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Manajemen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedData = DB::table('manajemens')
            ->join('bumdesas', 'manajemens.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'manajemens.id_user', '=', 'users.id')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            ->select('manajemens.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan','desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->get();
            return view('manajemen.index', ['manajemen' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manajemen.create', ['dt' => Bumdesa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manajemenbaru=Manajemen::create($request->all());

        $manajemen=Manajemen::where("id",$manajemenbaru->id)->first();

        $hasilnilai=
        $manajemen->nilai_1_a+
        $manajemen->nilai_1_b+
        $manajemen->nilai_2_a+
        $manajemen->nilai_2_b+
        $manajemen->nilai_3_a+
        $manajemen->nilai_3_b+
        $manajemen->nilai_4_a+
        $manajemen->nilai_4_b+
        $manajemen->nilai_5_a+
        $manajemen->nilai_5_b+
        $manajemen->nilai_6_a+
        $manajemen->nilai_6_b

        ;
        $manajemen->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("manajemen.index")->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manajemen $manajeman)
    {
        $joinedData = DB::table('manajemens')
            ->join('bumdesas', 'manajemens.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'manajemens.id_user', '=', 'users.id')
            ->select('manajemens.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('manajemens.id', $manajeman->id)
            ->first();
        return view('manajemen.show', ['dt'=>$joinedData]);
    }
    public function detail($id_bumdesa,$tahun)
    {
        $data = Manajemen::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();

        return view('manajemen.detail', ['dt'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manajemen $manajeman)
    {
        $joinedData = DB::table('manajemens')
            ->join('bumdesas', 'manajemens.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'manajemens.id_user', '=', 'users.id')
            ->select('manajemens.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('manajemens.id', $manajeman->id)
            ->first();
        return view('manajemen.edit', ['dt'=>$joinedData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manajemen $manajeman)
    {
        $manajeman->update($request->all());

        $manajemenupdate=Manajemen::where("id",$manajeman->id)->first();
        //dd($kelembagaan);
        $hasilnilai=
        $manajeman->nilai_1_a+
        $manajeman->nilai_1_b+
        $manajeman->nilai_2_a+
        $manajeman->nilai_2_b+
        $manajeman->nilai_3_a+
        $manajeman->nilai_3_b+
        $manajeman->nilai_4_a+
        $manajeman->nilai_4_b+
        $manajeman->nilai_5_a+
        $manajeman->nilai_5_b+
        $manajeman->nilai_6_a+
        $manajeman->nilai_6_b
        ;
        $manajemenupdate->update(['total_nilai'=>$hasilnilai, 'nilai_persentase'=>$hasilnilai*(10/100)]);
        return redirect()->route("manajemen.index")->with('success','Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manajemen $manajeman)
    {
        $manajeman->delete();
        return redirect()->route('manajemen.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
