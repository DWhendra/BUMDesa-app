<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('poin_aspeks', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->integer('skor');
            $table->unsignedBigInteger('id_subkategori_aspek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poin_aspeks');
    }
};