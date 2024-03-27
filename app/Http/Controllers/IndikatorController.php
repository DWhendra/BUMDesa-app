<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndikatorController extends Controller
{
    public function index()
    {
        return view("indikator.index");
    }

}
