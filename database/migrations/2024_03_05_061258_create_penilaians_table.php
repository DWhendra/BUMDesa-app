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
            $table->unsignedBigInteger('id_kategori_aspek');
            $table->unsignedBigInteger('id_subkategori_aspek');
            $table->unsignedBigInteger('id_poin_aspek');
            $table->string('hasil');
            $table->string('keterangan');
            $table->string('tahun');
            $table->timestamps();
            $table->foreign('id_kategori_aspek')->references('id')->on('kategori_aspeks');
            $table->foreign('id_subkategori_aspek')->references('id')->on('subkategori_aspeks');
            $table->foreign('id_poin_aspek')->references('id')->on('poin_aspeks');
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
