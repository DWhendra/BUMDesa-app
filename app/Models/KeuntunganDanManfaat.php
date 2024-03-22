<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuntunganDanManfaat extends Model
{
    use HasFactory;
    protected $table = 'keuntungan_dan_manfaats';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
}
