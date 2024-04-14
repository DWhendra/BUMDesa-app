<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikators';
    protected $primaryKey = 'id';
    protected $guarded=['id'];

    public function bumdesa(){
        return $this->belongsTo(Bumdesa::class, 'id_bumdesa');
    }

    public static function getIndikatorOptions()
    {
        return [
            'kelembagaan' => 'Kelembagaan',
            'manajemen' => 'Manajemen',
            'usaha dan unit usaha' => 'Usaha dan unit usaha',
            'kerjasama dan inovasi' => 'Kerjasama dan inovasi',
            'aset dan permodalan' => 'Aset dan permodalan',
            'adminstrasi laporan keuangan dan akuntabilitas' => 'Adminstrasi, Laporan Keuangan dan Akuntabilitas',
            'keuntungan dan manfaat' => 'Keuntungan dan manfaat',
        ];
    }
}
