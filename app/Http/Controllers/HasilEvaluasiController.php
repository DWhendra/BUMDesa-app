<?php

namespace App\Http\Controllers;

use App\Models\ALKA;
use App\Models\Bumdesa;
use App\Models\Manajemen;
use App\Models\Kelembagaan;
use Illuminate\Http\Request;
use App\Models\HasilEvaluasi;
use App\Models\AsetDanPermodalan;
use App\Models\UsahaDanUnitUsaha;
use App\Models\KerjasamaDanInovasi;
use App\Models\KeuntunganDanManfaat;

class HasilEvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function storehasil(Request $request, $tahun)
    {
        $id_bumdesa=Bumdesa::where('tahun_laporan', $tahun)->get();

        $kelembagaan = Kelembagaan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $kerjasamaDanInovasi = KerjasamaDanInovasi::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $keuntunganDanManfaat = KeuntunganDanManfaat::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $manajemen = Manajemen::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $usahaDanUnitUsaha = UsahaDanUnitUsaha::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $ALKA = ALKA::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $asetDanPermodalan = AsetDanPermodalan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();

        $nilaiKelembagaan = $kelembagaan->nilai_persentase;
        $nilaiKerjasamaDanInovasi = $kerjasamaDanInovasi->nilai_persentase;
        $nilaiKeuntunganDanManfaat = $keuntunganDanManfaat->nilai_persentase;
        $nilaiManajemen = $manajemen->nilai_persentase;
        $nilaiUsahaDanUnitUsaha = $usahaDanUnitUsaha->nilai_persentase;
        $nilaiALKA = $ALKA->nilai_persentase;
        $nilaiAsetDanPermodalan = $asetDanPermodalan->nilai_persentase;

        $totalNilai =
            $nilaiKelembagaan +
            $nilaiKerjasamaDanInovasi +
            $nilaiKeuntunganDanManfaat +
            $nilaiManajemen +
            $nilaiUsahaDanUnitUsaha +
            $nilaiALKA +
            $nilaiAsetDanPermodalan;

        $hasilcreate=HasilEvaluasi::create($request->all());
        $hasil=HasilEvaluasi::where('id',$hasilcreate->id)->first();
        $hasil->update(['id_bumdesa'=>$id_bumdesa, 'tahun'=>$tahun, 'total'=>$totalNilai]);

        return redirect()->route("hasil-rekapitulasi.index")->with('success','');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(HasilEvaluasi $hasilEvaluasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilEvaluasi $hasilEvaluasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilEvaluasi $hasilEvaluasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilEvaluasi $hasilEvaluasi)
    {
        //
    }
}
