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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_desa');
            $table->unsignedBigInteger('id_bumdesa');
            $table->string('tahun');
            $table->string('1_1_nilai');
            $table->string('1_1_keterangan');
            $table->string('1_2_nilai');
            $table->string('1_2_keterangan');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->foreign('id_desa')->references('id')->on('desas');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_bumdesa')->references('id')->on('bumdesas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
