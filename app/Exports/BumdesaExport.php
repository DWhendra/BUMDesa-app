<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class BumdesaExport implements FromView
{
    /**
    * @return \Illuminate\Support\View

    */
    public function View():View
    {
        $joinedData = DB::table('bumdesas')
        ->join('kecamatans', 'bumdesas.id_kecamatan', '=', 'kecamatans.id')
        ->join('desas', 'bumdesas.id_desa', '=', 'desas.id')
        ->join('users', 'bumdesas.id_user', '=', 'users.id')
        ->select('bumdesas.*', 'desas.nama_desa as nama_desa', 'kecamatans.nama_kecamatan as nama_kecamatan', 'users.nama as nama')
        ->orderBy('id', 'desc')
        ->get();
        return view('export.table',['bumdes'=>$joinedData]);
    }
}
