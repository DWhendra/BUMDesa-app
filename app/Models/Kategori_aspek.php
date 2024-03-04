<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_aspek extends Model
{
    use HasFactory;
    protected $table = 'kategori_aspeks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'skor',
        'tahun',
        'id_indikator',
    ];
}
