<?php

namespace App\Http\Controllers;

use App\Models\ALKA;
use App\Models\AsetDanPermodalan;
use App\Models\Bumdesa;
use App\Models\Indikator;
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
        // $selecttahun = $this->generateYears(date('Y'), 1900);
        $selecttahun = Bumdesa::select('tahun_laporan')->distinct()->pluck('tahun_laporan');
        return view('hasil-rekapitulasi.index',compact('selecttahun'), ['tahun' => HasilRekapitulasi::all()]);
    }
    private function generateYears($startYear, $endYear)
    {
        $years = [];
        for ($i = $startYear; $i >= $endYear; $i--) {
            $years[] = $i;
        }
        return $years;
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

        $joinedData = DB::table('bumdesas')
            ->select('bumdesas.*')
            ->orderBy('total_nilai', 'desc')
            ->where('tahun_laporan', $tahun)
            ->get();

        // $bumdesa = Bumdesa::where('tahun_laporan', $tahun)->get();
        // dd($bumdesa);
        return view('hasil-rekapitulasi.show', [
            'tahun' => $tahun,
            // 'total_nilai' => $totalNilai,
            'bumdesa' => $joinedData
            // 'bumdesa' => Bumdesa::where('tahun_laporan', $tahun)->get()
        ]);
    }
    public function detailRekapitulasi($id_bumdesa, $tahun)
    {
        $persentasi = [
            'kelembagaan' => '10%',
            'manajemen' => '10%',
            'usaha dan unit usaha' => '15%',
            'kerjasama dan inovasi' => '25%',
            'aset dan permodalan' => '10%',
            'adminstrasi laporan keuangan dan akuntabilitas' => '10%',
            'keuntungan dan manfaat' => '20%',
        ];


        // $data = Indikator::where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)->firstOrFail();
        $joinedData = DB::table('indikators')
            ->join('bumdesas', 'indikators.id_bumdesa', '=', 'bumdesas.id')
            ->select('indikators.*')
            ->where('id_bumdesa', $id_bumdesa)->where('tahun', $tahun)
            ->orderByRaw("CASE
            WHEN kategori = 'kelembagaan' THEN 1
            WHEN kategori = 'manajemen' THEN 2
            WHEN kategori = 'usaha dan unit usaha' THEN 3
            WHEN kategori = 'kerjasama dan inovasi' THEN 4
            WHEN kategori = 'aset dan permodalan' THEN 5
            WHEN kategori = 'adminstrasi laporan keuangan dan akuntabilitas' THEN 6
            WHEN kategori = 'keuntungan dan manfaat' THEN 7
        END")
            ->get();


        $bumdesa = Bumdesa::where('id', $id_bumdesa)->first();

        $kelembagaan = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'kelembagaan')->firstOrFail();
        $manajemen = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'manajemen')->firstOrFail();
        $usahaDanUnitUsaha = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'usaha dan unit usaha')->firstOrFail();
        $kerjasamaDanInovasi = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'kerjasama dan inovasi')->firstOrFail();
        $asetDanPermodalan = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'aset dan permodalan')->firstOrFail();
        $ALKA = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'adminstrasi laporan keuangan dan akuntabilitas')->firstOrFail();
        $keuntunganDanManfaat = Indikator::where('tahun', $tahun)->where('id_bumdesa', $id_bumdesa)->where('kategori', 'keuntungan dan manfaat')->firstOrFail();

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
            'datalengkap' => $joinedData,
            'total_persentase' => $totalNilai,
            'tahun' => $tahun,
            'total_nilai' => $total,
            'bumdesa' => $bumdesa,
            'persentasi' => $persentasi,
        ]);
        // return view('hasil-rekapitulasi.detail-rekapitulasi', [
        //     'kelembagaan' => $kelembagaan,
        //     'kerjasamaDanInovasi' => $kerjasamaDanInovasi,
        //     'keuntunganDanManfaat' => $keuntunganDanManfaat,
        //     'manajemen' => $manajemen,
        //     'usahaDanUnitUsaha' => $usahaDanUnitUsaha,
        //     'alka' => $ALKA,
        //     'asetDanPermodalan' => $asetDanPermodalan,
        //     'tahun' => $tahun,
        //     'bumdesa' => $bumdesa,
        //     'total_nilai' => $totalNilai,
        //     'total' => $total
        // ]);
    }
    public function store(Request $request)
    {
        $selecttahun = Bumdesa::select('tahun_laporan')->distinct()->pluck('tahun_laporan');
        $dt = $request->validate([
            'tahun' => ['unique:hasil_rekapitulasis']
        ]);
        HasilRekapitulasi::create($dt);
        return view('hasil-rekapitulasi.index',compact('selecttahun'), ['tahun' => HasilRekapitulasi::all()]);
    }

    public function updateHasil(Request $request, $id)
    {
        $bumdesa = Bumdesa::find($id); // Mencari data dengan ID yang diberikan

        if ($bumdesa) {
            // Mengubah nilai kolom tertentu
            $bumdesa->total_nilai = $request->total_nilai;
            $bumdesa->save(); // Menyimpan perubahan

            return redirect()->back()->with(['success' => 'Data Berhasil Di Setujui!']);
        } else {

        }
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

    public function ekspor($tahun)
    {
        $joinedData = DB::table('bumdesas')
            ->select('bumdesas.*')
            ->orderBy('total_nilai', 'desc')
            ->where('tahun_laporan', $tahun)
            ->get();

        return view('export.cetak-rekapitulasi', [
            'tahun' => $tahun,
            'bumdesa' => $joinedData
        ]);
    }
}
