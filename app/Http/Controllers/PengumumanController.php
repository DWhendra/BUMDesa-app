<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(){
        //$this->authorize('admin');
        $joinedData = DB::table('pengumumans')
            ->join('users', 'pengumumans.id_user', '=', 'users.id')
            ->select('pengumumans.*','users.nama as nama_user')
            //->where('id_user', auth()->user()->id)
            ->get();
        return view('pengumuman.index', ['pengumuman' => $joinedData]);
    }
}
