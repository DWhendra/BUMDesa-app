<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bumdesas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('nama_bumdes');
            $table->string('tahun_berdiri');
            $table->string('jenis_unit');
            $table->string('unit_usaha');
            $table->unsignedBigInteger('id_desa');
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('alamat_kantor');
            $table->string('npwp');
            $table->string('perdes');
            $table->string('no_legalitas');
            $table->string('email_bumdes');
            $table->string('email_direktur');
            $table->string('nohp_direktur');
            $table->string('tenaga_kerja');
            $table->string('pengurus_bumdes');
            $table->string('produk_unggulan');
            $table->string('penyertaan_modal');
            $table->string('laporan_keuangan');
            $table->string('keuntungan_bersih');
            $table->string('pad');
            $table->string('program_inovasi');
            $table->string('kerja_sama');
            $table->string('status_kepemilikan');
            $table->string('pedoman');
            $table->string('lampiran_pedoman');
            $table->string('bentuk_usaha');
            $table->string('penggunaan_aplikasi');
            $table->string('saran');
            $table->string('lampiran_lpj');
            $table->string('program_kerja');
            $table->timestamps();
            $table->string('tahun_laporan');
            $table->string('bukti_laporan');

            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->foreign('id_desa')->references('id')->on('desas');
            //$table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bumdesa');
    }
};
