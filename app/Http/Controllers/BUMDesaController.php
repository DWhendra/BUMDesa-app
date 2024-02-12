<?php

namespace App\Http\Controllers;

use App\Models\Bumdesa;
use App\Models\Desa;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BUMDesaController extends Controller
{
    public function index()
    {
        $joinedData = DB::table('bumdesas')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            //->join('users', 'bumdesas.id_user', '=', 'users.id')
            ->select('bumdesas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->get();
        return view('bumdesa.index', ['bumdesa' => $joinedData]);
    }

    //OPSI 
    public function create()
    {
        return view('bumdesa.create', ['kecamatan' => Kecamatan::all()]);
    }
    public function desa($id_opsi)
    {
        $desa = Desa::where('id_kecamatan', $id_opsi)->get();
        return response()->json($desa);
    }
    public function store(Request $request)
    {
        $nm = $request->bukti_laporan;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        Bumdesa::create([
            'id_user' => $request->id_user,
            'nama_bumdes' => $request->nama_bumdes,
            'tahun_berdiri' => $request->tahun_berdiri,
            'jenis_unit' => $request->jenis_unit,
            'unit_usaha' => $request->unit_usaha,
            'id_desa' => $request->id_desa,
            'id_kecamatan' => $request->id_kecamatan,
            'alamat_kantor' => $request->alamat_kantor,
            'npwp' => $request->npwp,
            'perdes' => $request->perdes,
            'no_legalitas' => $request->no_legalitas,
            'email_bumdes' => $request->email_bumdes,
            'email_direktur' => $request->email_direktur,
            'nohp_direktur' => $request->nohp_direktur,
            'tenaga_kerja' => $request->tenaga_kerja,
            'pengurus_bumdes' => $request->pengurus_bumdes,
            'produk_unggulan' => $request->produk_unggulan,
            'penyertaan_modal' => $request->penyertaan_modal,
            'laporan_keuangan' => $request->laporan_keuangan,
            'keuntungan_bersih' => $request->keuntungan_bersih,
            'pad' => $request->pad,
            'program_inovasi' => $request->program_inovasi,
            'kerja_sama' => $request->kerja_sama,
            'status_kepemilikan' => $request->status_kepemilikan,
            'pedoman' => $request->pedoman,
            'lampiran_pedoman' => $request->lampiran_pedoman,
            'bentuk_usaha' => $request->bentuk_usaha,
            'penggunaan_aplikasi' => $request->penggunaan_aplikasi,
            'saran' => $request->saran,
            'lampiran_lpj' => $request->lampiran_lpj,
            'program_kerja' => $request->program_kerja,
            'tahun_laporan' => $request->tahun_laporan,
            'bukti_laporan' => $namafile,
        ]);

        $nm->move(public_path() . '/fileup', $namafile);
        // dtBumdes::create($request->all());
        // //redirect to index
        return redirect()->route('bumdesa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update(Request $request, Bumdesa $bumdesa)
    {
        // $awal=$bumdes->bukti_laporan;
        // $files = $request->file('bukti_laporan');
        
        $dt= [
            'nama_bumdes' => $request->nama_bumdes,
            'tahun_berdiri' => $request->tahun_berdiri,
            'jenis_unit' => $request->jenis_unit,
            'unit_usaha' => $request->unit_usaha,
            'id_desa' => $request->id_desa,
            'id_kecamatan' => $request->id_kecamatan,
            'alamat_kantor' => $request->alamat_kantor,
            'npwp' => $request->npwp,
            'perdes' => $request->perdes,
            'no_legalitas' => $request->no_legalitas,
            'email_bumdes' => $request->email_bumdes,
            'email_direktur' => $request->email_direktur,
            'nohp_direktur' => $request->nohp_direktur,
            'tenaga_kerja' => $request->tenaga_kerja,
            'pengurus_bumdes' => $request->pengurus_bumdes,
            'produk_unggulan' => $request->produk_unggulan,
            'penyertaan_modal' => $request->penyertaan_modal,
            'laporan_keuangan' => $request->laporan_keuangan,
            'keuntungan_bersih' => $request->keuntungan_bersih,
            'pad' => $request->pad,
            'program_inovasi' => $request->program_inovasi,
            'kerja_sama' => $request->kerja_sama,
            'status_kepemilikan' => $request->status_kepemilikan,
            'pedoman' => $request->pedoman,
            'lampiran_pedoman' => $request->lampiran_pedoman,
            'bentuk_usaha' => $request->bentuk_usaha,
            'penggunaan_aplikasi' => $request->penggunaan_aplikasi,
            'saran' => $request->saran,
            'lampiran_lpj' => $request->lampiran_lpj,
            'program_kerja' => $request->program_kerja,
            'tahun_laporan' => $request->tahun_laporan,
            'bukti_laporan' =>$request->file('bukti_laporan')
        ];
        // dd($dt['bukti_laporan']->getClientOriginalExtension());
        //dd($dt);
        if(empty($dt['bukti_laporan'])){
            $dt['bukti_laporan']= $bumdesa->bukti_laporan;
            // $bumdes->bukti_laporan = old('bukti_laporan');
            $bumdesa->update($dt);
        }
        else{
            // $files = $request->file('bukti_laporan');
            $file=public_path('/fileup/').$bumdesa->bukti_laporan;
            if(file_exists($file)){
                @unlink($file);
            }
            $namafile = time() . rand(100, 999) . "." . $dt['bukti_laporan']->getClientOriginalExtension();
            $dt['bukti_laporan']->move(public_path().'/fileup', $namafile);
            $dt['bukti_laporan']= $namafile;
            $bumdesa->update($dt);
            
        };
       
        // $bumdes->update($request->all());
        return redirect()->route('bumdesa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function detail(Bumdesa $bumdes)
    {
        $joinedData = DB::table('bumdesas')
            ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
            ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
            ->select('bumdesas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan')
            ->where('bumdesas.id', $bumdes->id)
            ->get();
        return view('bumdesa.detail', ['bumdesa' => $joinedData]);
    }
}
