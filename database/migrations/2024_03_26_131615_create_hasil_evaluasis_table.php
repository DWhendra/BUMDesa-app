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
        Schema::create('hasil_evaluasis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_bumdesa');
            $table->foreign('id_bumdesa')->references('id')->on('bumdesas');
            $table->string('tahun')->nullable();
            $table->string('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_evaluasis');
    }
};
