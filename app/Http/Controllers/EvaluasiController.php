<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluasiController extends Controller
{
    public function index_indikator(){
        $joinedData = DB::table('indikators')
            
            ->select('indikators.*')
            //->where('id_user', auth()->user()->id)
            ->get();
        return view('evaluasi.indikator.index', ['indikators' => $joinedData]);
    }
    public function create_indikator()
    {
        $this->authorize('admin');
        return view('evaluasi.indikator.create');
    }
    public function index_kategori_aspek(){
        return view('evaluasi.kategori_aspek.index');
    }
    public function index_aspek(){
        return view('evaluasi.aspek.index');
    }
    public function index_poin(){
        return view('evaluasi.poin.index');
    }
}
