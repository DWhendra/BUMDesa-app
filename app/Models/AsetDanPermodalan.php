<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetDanPermodalan extends Model
{
    use HasFactory;
    protected $table = 'aset_dan_permodalans';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
}
