<?php

namespace App\Http\Controllers;

use App\Models\Bumdesa;
use App\Models\Indikator;
use Illuminate\Http\Request;
use App\Models\UsahaDanUnitUsaha;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($request->has('search')) {
           $joinedData = DB::table('indikators')
                ->join('bumdesas', 'indikators.id_bumdesa', '=', 'bumdesas.id')
                ->join('users', 'indikators.id_user', '=', 'users.id')
                ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
                ->select('indikators.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
                ->where('tahun','LIKE','%' .$request->search.'%')
                ->paginate(10);
                return view('indikator.index', ['indikator' => $joinedData]);
        }else{
        if ($user->role == 'admin') {
            $joinedData = DB::table('indikators')
                ->join('bumdesas', 'indikators.id_bumdesa', '=', 'bumdesas.id')
                ->join('users', 'indikators.id_user', '=', 'users.id')
                ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
                ->select('indikators.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
                ->orderBy('id', 'desc')
                ->paginate(10);
            return view('indikator.index', ['indikator' => $joinedData]);
        } else if ($user->role == 'pegawai') {
            $joinedData = DB::table('indikators')
                ->join('users', 'indikators.id_user', '=', 'users.id')
                ->join('bumdesas', 'indikators.id_bumdesa', '=', 'bumdesas.id')
                ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
                ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
                ->select('indikators.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
                ->where('indikators.id_user', auth()->user()->id)
                ->paginate(10);

            return view('indikator.index', ['indikator' => $joinedData]);
        }
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('indikator.create', ['bumdesa' => Bumdesa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->kategori == 'kelembagaan') {
            $kelembagaanbaru = Indikator::create($request->all());
            $kelembagaan = Indikator::where("id", $kelembagaanbaru->id)->first();
            $hasilnilai =
                $kelembagaan->nilai_1_a +
                $kelembagaan->nilai_1_b +
                $kelembagaan->nilai_1_c +
                $kelembagaan->nilai_2_a +
                $kelembagaan->nilai_2_b +
                $kelembagaan->nilai_2_c +
                $kelembagaan->nilai_3_a +
                $kelembagaan->nilai_3_b +
                $kelembagaan->nilai_4_a +
                $kelembagaan->nilai_4_b +
                $kelembagaan->nilai_5_aa +
                $kelembagaan->nilai_5_ab +
                $kelembagaan->nilai_5_ac +
                $kelembagaan->nilai_5_ba +
                $kelembagaan->nilai_5_bb +
                $kelembagaan->nilai_5_bc +
                $kelembagaan->nilai_5_ca +
                $kelembagaan->nilai_5_cb +
                $kelembagaan->nilai_5_cc
            ;
            $kelembagaan->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);

        } else if ($request->kategori == 'manajemen') {
            $manajemenbaru = Indikator::create($request->all());
            $manajemen = Indikator::where("id", $manajemenbaru->id)->first();
            $hasilnilai =
                $manajemen->nilai_1_a +
                $manajemen->nilai_1_b +
                $manajemen->nilai_2_a +
                $manajemen->nilai_2_b +
                $manajemen->nilai_3_a +
                $manajemen->nilai_3_b +
                $manajemen->nilai_4_a +
                $manajemen->nilai_4_b +
                $manajemen->nilai_5_a +
                $manajemen->nilai_5_b +
                $manajemen->nilai_6_a +
                $manajemen->nilai_6_b
            ;
            $manajemen->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);
        } else if ($request->kategori == 'usaha dan unit usaha') {
            $databaru = Indikator::create($request->all());
            $usahadanunitusaha = Indikator::where("id", $databaru->id)->first();
            $hasilnilai =
                $usahadanunitusaha->nilai_1_a +
                $usahadanunitusaha->nilai_1_b +
                $usahadanunitusaha->nilai_2_a +
                $usahadanunitusaha->nilai_2_b +
                $usahadanunitusaha->nilai_3_a +
                $usahadanunitusaha->nilai_3_b +
                $usahadanunitusaha->nilai_4_a +
                $usahadanunitusaha->nilai_4_b +
                $usahadanunitusaha->nilai_4_c +
                $usahadanunitusaha->nilai_4_d +
                $usahadanunitusaha->nilai_5_a +
                $usahadanunitusaha->nilai_5_b +
                $usahadanunitusaha->nilai_6_a +
                $usahadanunitusaha->nilai_6_b +
                $usahadanunitusaha->nilai_6_c +
                $usahadanunitusaha->nilai_6_d
            ;
            $usahadanunitusaha->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (15 / 100)]);
        } else if ($request->kategori == 'kerjasama dan inovasi') {
            $databaru = Indikator::create($request->all());
            $kerjasamadaninovasi = Indikator::where("id", $databaru->id)->first();
            $hasilnilai =
                $kerjasamadaninovasi->nilai_1_a +
                $kerjasamadaninovasi->nilai_1_b +
                $kerjasamadaninovasi->nilai_2_a +
                $kerjasamadaninovasi->nilai_2_b +
                $kerjasamadaninovasi->nilai_3_a +
                $kerjasamadaninovasi->nilai_3_b +
                $kerjasamadaninovasi->nilai_4_a +
                $kerjasamadaninovasi->nilai_4_b +
                $kerjasamadaninovasi->nilai_5_a +
                $kerjasamadaninovasi->nilai_5_b +
                $kerjasamadaninovasi->nilai_5_c +
                $kerjasamadaninovasi->nilai_5_d +
                $kerjasamadaninovasi->nilai_5_e +
                $kerjasamadaninovasi->nilai_5_f
            ;
            $kerjasamadaninovasi->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (25 / 100)]);
        } else if ($request->kategori == 'aset dan permodalan') {
            $databaru = Indikator::create($request->all());
            $asetDanPermodalan = Indikator::where("id", $databaru->id)->first();
            $hasilnilai =
                $asetDanPermodalan->nilai_1_a +
                $asetDanPermodalan->nilai_1_b +
                $asetDanPermodalan->nilai_1_c +
                $asetDanPermodalan->nilai_2_a +
                $asetDanPermodalan->nilai_2_b +
                $asetDanPermodalan->nilai_2_c +
                $asetDanPermodalan->nilai_2_d
            ;
            $asetDanPermodalan->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);
        } else if ($request->kategori == 'adminstrasi laporan keuangan dan akuntabilitas') {
            $alkabaru = Indikator::create($request->all());
            $alka = Indikator::where("id", $alkabaru->id)->first();
            $hasilnilai =
                $alka->nilai_1_a +
                $alka->nilai_1_b +
                $alka->nilai_1_c +
                $alka->nilai_1_d +
                $alka->nilai_2_a +
                $alka->nilai_2_b +
                $alka->nilai_2_c +
                $alka->nilai_2_d +
                $alka->nilai_3_a +
                $alka->nilai_3_b +
                $alka->nilai_3_c +
                $alka->nilai_4_a +
                $alka->nilai_4_b +
                $alka->nilai_5_a +
                $alka->nilai_5_b
            ;
            $alka->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);
        } else if ($request->kategori == 'keuntungan dan manfaat') {
            $databaru = Indikator::create($request->all());
            $keuntungandanmanfaat = Indikator::where("id", $databaru->id)->first();
            $hasilnilai =
                $keuntungandanmanfaat->nilai_1_a +
                $keuntungandanmanfaat->nilai_1_b +
                $keuntungandanmanfaat->nilai_1_c +
                $keuntungandanmanfaat->nilai_1_d +
                $keuntungandanmanfaat->nilai_1_e +
                $keuntungandanmanfaat->nilai_2_a +
                $keuntungandanmanfaat->nilai_2_b +
                $keuntungandanmanfaat->nilai_2_c +
                $keuntungandanmanfaat->nilai_2_d +
                $keuntungandanmanfaat->nilai_3_a +
                $keuntungandanmanfaat->nilai_3_b +
                $keuntungandanmanfaat->nilai_3_c +
                $keuntungandanmanfaat->nilai_3_d
            ;
            $keuntungandanmanfaat->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (20 / 100)]);
        }
        return redirect()->route("indikator.index")->with('success', 'Data Berhasil Disimpan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indikator $indikator)
    {
        $joinedData = DB::table('indikators')
            ->join('bumdesas', 'indikators.id_bumdesa', '=', 'bumdesas.id')
            ->join('users', 'indikators.id_user', '=', 'users.id')
            ->select('indikators.*', 'users.nama as nama', 'bumdesas.nama_bumdes as nama_bumdes', 'bumdesas.tahun_laporan as tahun_laporan')
            ->where('indikators.id', $indikator->id)
            ->first();
        return view('indikator.edit', ['data' => $joinedData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Indikator $indikator)
    {
        // dd($request->all());
        if ($request->kategori == 'kelembagaan') {
            $indikator->update($request->all());
            $kelembagaanupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_1_c +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_2_c +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_4_a +
                $indikator->nilai_4_b +
                $indikator->nilai_5_aa +
                $indikator->nilai_5_ab +
                $indikator->nilai_5_ac +
                $indikator->nilai_5_ba +
                $indikator->nilai_5_bb +
                $indikator->nilai_5_bc +
                $indikator->nilai_5_ca +
                $indikator->nilai_5_cb +
                $indikator->nilai_5_cc
            ;
            $kelembagaanupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);

        } else if ($request->kategori == 'manajemen') {
            $indikator->update($request->all());
            $manajemenupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_4_a +
                $indikator->nilai_4_b +
                $indikator->nilai_5_a +
                $indikator->nilai_5_b +
                $indikator->nilai_6_a +
                $indikator->nilai_6_b
            ;
            $manajemenupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);

        } else if ($request->kategori == 'usaha dan unit usaha') {
            $indikator->update($request->all());
            $usahaDanUnitUsahaupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_4_a +
                $indikator->nilai_4_b +
                $indikator->nilai_4_c +
                $indikator->nilai_4_d +
                $indikator->nilai_5_a +
                $indikator->nilai_5_b +
                $indikator->nilai_6_a +
                $indikator->nilai_6_b +
                $indikator->nilai_6_c +
                $indikator->nilai_6_d
            ;
            $usahaDanUnitUsahaupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (15 / 100)]);

        } else if ($request->kategori == 'kerjasama dan inovasi') {
            $indikator->update($request->all());
            $kerjasamaDanInovasiupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_4_a +
                $indikator->nilai_4_b +
                $indikator->nilai_5_a +
                $indikator->nilai_5_b +
                $indikator->nilai_5_c +
                $indikator->nilai_5_d +
                $indikator->nilai_5_e +
                $indikator->nilai_5_f
            ;
            $kerjasamaDanInovasiupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (25 / 100)]);

        } else if ($request->kategori == 'aset dan permodalan') {
            $indikator->update($request->all());
            $asetDanPermodalanupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_1_c +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_2_c +
                $indikator->nilai_2_d
            ;
            $asetDanPermodalanupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);

        } else if ($request->kategori == 'adminstrasi laporan keuangan dan akuntabilitas') {
            $indikator->update($request->all());
            $alkaupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_1_c +
                $indikator->nilai_1_d +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_2_c +
                $indikator->nilai_2_d +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_3_c +
                $indikator->nilai_4_a +
                $indikator->nilai_4_b +
                $indikator->nilai_5_a +
                $indikator->nilai_5_b
            ;
            $alkaupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (10 / 100)]);

        } else if ($request->kategori == 'keuntungan dan manfaat') {
            $indikator->update($request->all());
            $keuntungandanmanfaatupdate = Indikator::where("id", $indikator->id)->first();
            $hasilnilai =
                $indikator->nilai_1_a +
                $indikator->nilai_1_b +
                $indikator->nilai_1_c +
                $indikator->nilai_1_d +
                $indikator->nilai_1_e +
                $indikator->nilai_2_a +
                $indikator->nilai_2_b +
                $indikator->nilai_2_c +
                $indikator->nilai_2_d +
                $indikator->nilai_3_a +
                $indikator->nilai_3_b +
                $indikator->nilai_3_c +
                $indikator->nilai_3_d
            ;
            $keuntungandanmanfaatupdate->update(['total_nilai' => $hasilnilai, 'nilai_persentase' => $hasilnilai * (20 / 100)]);

        }
        return redirect()->route("indikator.index")->with('success', 'Data Berhasil Disimpan!');
    }

    public function detail($id_bumdesa, $indikator, $tahun)
    {
        $data = Indikator::where('id_bumdesa', $id_bumdesa)->where('kategori', $indikator)->where('tahun', $tahun)->firstOrFail();

        return view('indikator.detail', ['data' => $data]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        $indikator->delete();
        return redirect()->route('indikator.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
