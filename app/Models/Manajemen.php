<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    use HasFactory;
    protected $table = 'manajemens';
    protected $primaryKey = 'id';
    protected $guarded=['id'];
    public function bumdesa(){
        return $this->belongsTo(Bumdesa::class, 'id_bumdesa');
    }
}
