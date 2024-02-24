<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){
        //$this->authorize('admin');
        $joinedData = DB::table('pengumumans')
            ->join('desas', 'pengumumans.id_desa', '=', 'desas.id')
            ->select('pengumumans.*','desas.nama_desa as nama_desa')
            //->where('id_user', auth()->user()->id)
            ->get();
        return view('pengumuman.index', ['pengumuman' => $joinedData]);
    }
    public function create()
    {
        $this->authorize('admin');
        return view('pengumuman.create', ['pengumuman' => Pengumuman::all(),'user'=>User::all()],['kecamatan' => Kecamatan::all()]);
    }
    public function store(Request $request){
        $this->authorize('admin');
        $dtpengumuman=$request->validate([
            'id_kecamatan'=>'required',
            'id_desa'=>'required',
            'judul'=>'required',
            'deskripsi'=>'required',
            'tanggal'=>'required',
            'status'=>'required'
        ]);
        pengumuman::create($dtpengumuman);
        return redirect('/pengumuman')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id){
        //$this->authorize('admin');
        //return $id;
        //dd($id);
        return view('pengumuman.edit', ['pengumuman' => Pengumuman::where('id',$id)->get(), 'user' => User::all(),'kecamatan' => Kecamatan::all(),'desa' => Desa::all()]);
    }
    public function update(Request $request,$id){
        $pengumuman=$request->validate([
            'id_kecamatan'=>'',
            'id_desa'=>'required',
            'judul'=>'required',
            'deskripsi'=>'required',
            'tanggal'=>'required',
            'status'=>'required'
        ]);
        $data=Pengumuman::findOrFail($id);
        $data->update($pengumuman);
        //dd($dt);
        return redirect()->route('pengumuman.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('pengumuman.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
