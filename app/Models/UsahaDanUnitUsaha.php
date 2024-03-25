<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsahaDanUnitUsaha extends Model
{
    use HasFactory;
    protected $table = 'usaha_dan_unit_usahas';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
    public function bumdesa(){
        return $this->belongsTo(Bumdesa::class, 'id_bumdesa');
    }
}
