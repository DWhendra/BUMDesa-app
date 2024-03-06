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
        Schema::create('subkategori_aspeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('skor');
            $table->unsignedBigInteger('id_kategori_aspek');
            $table->foreign('id_kategori_aspek')->references('id')->on('kategori_aspeks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkategori_aspeks');
    }
};
