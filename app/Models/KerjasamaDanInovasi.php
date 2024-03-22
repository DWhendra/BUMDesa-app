<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjasamaDanInovasi extends Model
{
    use HasFactory;
    protected $table = 'kerjasama_dan_inovasis';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
}
