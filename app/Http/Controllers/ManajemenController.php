<?php

namespace App\Http\Controllers;

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
                ->join('kecamatans', 'manajemens.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'manajemens.id_desa', '=', 'desas.id')
                ->join('users', 'manajemens.id_user', '=', 'users.id')
                ->select('manajemens.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
                ->get();
            return view('manajemen.index', ['manajemen' => $joinedData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manajemen.create', ['user'=>User::all()],['kecamatan' => Kecamatan::all()]);
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
        $manajemen->update(['total_nilai'=>$hasilnilai]);
        return redirect()->route("manajemen.index")->with('success','');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manajemen $manajemen)
    {
        $joinedData = DB::table('manajemens')
            ->join('kecamatans', 'manajemens.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'manajemens.id_desa', '=', 'desas.id')
            ->select('manajemens.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('manajemens.id', $manajemen->id)
            ->first();
        return view('manajemen.show', ['dt'=>$joinedData,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manajemen $manajemen)
    {
        return view('manajemen.edit', ['dt'=>$manajemen,'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manajemen $manajemen)
    {
        $manajemen->update($request->all());

        $manajemenupdate=Manajemen::where("id",$manajemen->id)->first();
        //dd($kelembagaan);
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
        $manajemenupdate->update(['total_nilai'=>$hasilnilai]);
        return redirect()->route("manajemen.index")->with('success','');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manajemen $manajemen)
    {
        $manajemen->delete();
        return redirect()->route('manajemen.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
