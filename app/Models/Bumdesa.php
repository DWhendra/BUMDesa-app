<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumdesa extends Model
{
    use HasFactory;

    protected $table = 'bumdesas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'nama_bumdes',
        'tahun_berdiri',
        'jenis_unit',
        'unit_usaha',
        'id_desa',
        'id_kecamatan',
        'alamat_kantor',
        'npwp',
        'perdes',
        'no_legalitas',
        'email_bumdes',
        'email_direktur',
        'nohp_direktur',
        'tenaga_kerja',
        'pengurus_bumdes',
        'produk_unggulan',
        'penyertaan_modal',
        'laporan_keuangan',
        'keuntungan_bersih',
        'pad',
        'program_inovasi',
        'kerja_sama',
        'status_kepemilikan',
        'pedoman',
        'lampiran_pedoman',
        'bentuk_usaha',
        'penggunaan_aplikasi',
        'saran',
        'lampiran_lpj',
        'program_kerja',
        'tahun_laporan',
        'bukti_laporan',
    ];

    public function kecamatans()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelembagaan(){
        return $this->hasMany(Kelembagaan::class,'id_bumdesa');
    }
}
