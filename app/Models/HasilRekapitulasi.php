<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilRekapitulasi extends Model
{
    use HasFactory;
    protected $table = 'hasil_rekapitulasis';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
}
