<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubkategoriAspek extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kategori_aspek',
        'nama',
        'skor'
        ];
}
