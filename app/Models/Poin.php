<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    protected $table = 'poins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'tahun',
        'id_aspek',
    ];
}
