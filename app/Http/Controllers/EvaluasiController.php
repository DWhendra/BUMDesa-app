<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluasiController extends Controller
{
    public function index()
    {
        // $indikator = DB::table('indikators')
        // ->select('indikators.*')
        // ->get();
        // $kategoriaspek = DB::table('kategori_aspeks')
        // ->select('kategori_aspeks.*')
        // ->get();
        // $subkategoriaspek = DB::table('subkategori_aspeks')
        // ->select('subkategori_aspeks.*')
        // ->get();
        // $poinaspek = DB::table('poin_aspeks')
        // ->select('poin_aspeks.*')
        // ->get();
        // $jumlahindikator = $indikator->count();
        // $jumlahkategoriaspek = $kategoriaspek->count();
        // $jumlahsubkategoriaspek = $subkategoriaspek->count();
        // $jumlahpoinaspek = $poinaspek->count();
        // return view("evaluasi.index", ['jumlahindikator' => $jumlahindikator, 'jumlahkategoriaspek' => $jumlahkategoriaspek, 'jumlahsubkategoriaspek' => $jumlahsubkategoriaspek, 'jumlahpoinaspek' => $jumlahpoinaspek]);
        return view("evaluasi.index");

    }

}
