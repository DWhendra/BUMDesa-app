<?php

namespace App\Http\Controllers;

use App\Models\ALKA;
use App\Models\AsetDanPermodalan;
use App\Models\Bumdesa;
use App\Models\Kelembagaan;
use App\Models\Manajemen;
use App\Models\UsahaDanUnitUsaha;
use Illuminate\Http\Request;
use App\Models\HasilRekapitulasi;
use Illuminate\Support\Facades\DB;
use App\Models\KerjasamaDanInovasi;
use App\Models\KeuntunganDanManfaat;

class HasilRekapitulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hasil-rekapitulasi.index', ['tahun' => HasilRekapitulasi::all()]);
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
    public function tampilan($tahun)
    {
        $kelembagaan = Kelembagaan::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $kerjasamaDanInovasi = KerjasamaDanInovasi::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $keuntunganDanManfaat = KeuntunganDanManfaat::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $manajemen = Manajemen::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $usahaDanUnitUsaha = Manajemen::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $ALKA = ALKA::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();
        $asetDanPermodalan = AsetDanPermodalan::where('tahun', $tahun)->where('id_bumdesa', 1)->firstOrFail();

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

            // $bumdesa = Bumdesa::where('tahun_laporan', $tahun)->get();
            // dd($bumdesa);
        return view('hasil-rekapitulasi.show', [
            'tahun' => $tahun,
            'bumdesa' => Bumdesa::where('tahun_laporan', $tahun)->get()
        ]);
    }
    public function detailRekapitulasi($id_bumdesa, $tahun)
    {

        $bumdesa = Bumdesa::where('id', $id_bumdesa)->first();

        // $kelembagaan = Kelembagaan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $kerjasamaDanInovasi = KerjasamaDanInovasi::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $keuntunganDanManfaat = KeuntunganDanManfaat::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $manajemen = Manajemen::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $usahaDanUnitUsaha = Manajemen::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $ALKA = ALKA::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        // $asetDanPermodalan = AsetDanPermodalan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();

        $kelembagaan = Kelembagaan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $kerjasamaDanInovasi = KerjasamaDanInovasi::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $keuntunganDanManfaat = KeuntunganDanManfaat::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $manajemen = Manajemen::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $usahaDanUnitUsaha = UsahaDanUnitUsaha::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $ALKA = ALKA::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();
        $asetDanPermodalan = AsetDanPermodalan::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->firstOrFail();

        $totalKelembagaan = $kelembagaan->total_nilai;
        $totalKerjasamaDanInovasi = $kerjasamaDanInovasi->total_nilai;
        $totalKeuntunganDanManfaat = $keuntunganDanManfaat->total_nilai;
        $totalManajemen = $manajemen->total_nilai;
        $totalUsahaDanUnitUsaha = $usahaDanUnitUsaha->total_nilai;
        $totalALKA = $ALKA->total_nilai;
        $totalAsetDanPermodalan = $asetDanPermodalan->total_nilai;

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

        $total =
            $totalKelembagaan +
            $totalKerjasamaDanInovasi +
            $totalKeuntunganDanManfaat +
            $totalManajemen +
            $totalUsahaDanUnitUsaha +
            $totalALKA +
            $totalAsetDanPermodalan;

        return view('hasil-rekapitulasi.detail-rekapitulasi', [
            'kelembagaan' => $kelembagaan,
            'kerjasamaDanInovasi' => $kerjasamaDanInovasi,
            'keuntunganDanManfaat' => $keuntunganDanManfaat,
            'manajemen' => $manajemen,
            'usahaDanUnitUsaha' => $usahaDanUnitUsaha,
            'alka' => $ALKA,
            'asetDanPermodalan' => $asetDanPermodalan,
            'tahun' => $tahun,
            'bumdesa' => $bumdesa,
            'total_nilai' => $totalNilai,
            'total' => $total
        ]);
    }
    public function store(Request $request)
    {
        $dt = $request->validate([
            'tahun' => ['unique:hasil_rekapitulasis']
        ]);
        HasilRekapitulasi::create($dt);
        return view('hasil-rekapitulasi.index', ['tahun' => HasilRekapitulasi::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(HasilRekapitulasi $hasilRekapitulasi)
    {
        return view('hasil-rekapitulasi.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilRekapitulasi $hasilRekapitulasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HasilRekapitulasi $hasilRekapitulasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HasilRekapitulasi $rekapitulasi)
    {
        $rekapitulasi->delete();
        return redirect()->route('rekapitulasi.index')->with(['success' => 'Tahun Berhasil Dihapus!']);
    }
}
