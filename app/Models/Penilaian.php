<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori_aspek',
        'id_subkategori_aspek',
        'id_poin_aspek',
        'hasil',
        'keterangan',
        'tahun'
        ];
}
