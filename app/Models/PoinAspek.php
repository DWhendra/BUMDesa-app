<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoinAspek extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_subkategori_aspek',
        'nama',
        'skor'
        ];
}
