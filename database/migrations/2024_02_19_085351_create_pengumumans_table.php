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
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_desa');
            $table->unsignedBigInteger('id_kecamatan');
            $table->string('judul');
            $table->string('deskripsi');
            //$table->nullableMorphs('deskripsi');
            $table->string('tanggal');
            $table->string('status');
            $table->timestamps();
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->foreign('id_desa')->references('id')->on('desas');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumumans');
    }
    
};
