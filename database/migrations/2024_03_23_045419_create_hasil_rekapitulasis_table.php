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
        Schema::create('hasil_rekapitulasis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun')->nullable();
            $table->timestamps();

            // $table->timestamps();

            // $table->unsignedBigInteger('id_user');
            // $table->foreign('id_user')->references('id')->on('users');

            // $table->unsignedBigInteger('id_bumdesa');
            // $table->foreign('id_bumdesa')->references('id')->on('bumdesas');

            // $table->unsignedBigInteger('id_kelembagaan');
            // $table->foreign('id_kelembagaan')->references('id')->on('kelembagaans');

            // $table->unsignedBigInteger('id_manajemen');
            // $table->foreign('id_manajemen')->references('id')->on('manajemens');

            // $table->unsignedBigInteger('id_usaha_dan_unit_usaha');
            // $table->foreign('id_usaha_dan_unit_usaha')->references('id')->on('usaha_dan_unit_usahas');

            // $table->unsignedBigInteger('id_kerjasama_dan_inovasi');
            // $table->foreign('id_kerjasama_dan_inovasi')->references('id')->on('kerjasama_dan_inovasis');

            // $table->unsignedBigInteger('id_aset_dan_permodalan');
            // $table->foreign('id_aset_dan_permodalan')->references('id')->on('aset_dan_permodalans');

            // $table->unsignedBigInteger('id_alka');
            // $table->foreign('id_alka')->references('id')->on('alkas');

            // $table->unsignedBigInteger('id_keuntungan_dan_manfaat');
            // $table->foreign('id_keuntungan_dan_manfaat')->references('id')->on('keuntungan_dan_manfaats');

            // $table->string('total_rekapitulasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_rekapitulasis');
    }
};
