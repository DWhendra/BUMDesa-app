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
        Schema::create('kerjasama_dan_inovasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('bumdesa');
            $table->unsignedBigInteger('id_kecamatan');
            $table->unsignedBigInteger('id_desa');
            $table->integer('nilai_1_a')->nullable();
            $table->integer('nilai_1_b')->nullable();
            $table->string('ket_1_a')->nullable();
            $table->string('ket_1_b')->nullable();
            $table->integer('nilai_2_a')->nullable();
            $table->integer('nilai_2_b')->nullable();
            $table->string('ket_2_a')->nullable();
            $table->string('ket_2_b')->nullable();
            $table->integer('nilai_3_a')->nullable();
            $table->integer('nilai_3_b')->nullable();
            $table->string('ket_3_a')->nullable();
            $table->string('ket_3_b')->nullable();
            $table->integer('nilai_4_a')->nullable();
            $table->integer('nilai_4_b')->nullable();
            $table->string('ket_4_a')->nullable();
            $table->string('ket_4_b')->nullable();
            $table->integer('nilai_5_a')->nullable();
            $table->integer('nilai_5_b')->nullable();
            $table->integer('nilai_5_c')->nullable();
            $table->integer('nilai_5_d')->nullable();
            $table->integer('nilai_5_e')->nullable();
            $table->integer('nilai_5_f')->nullable();
            $table->string('ket_5_a')->nullable();
            $table->string('ket_5_b')->nullable();
            $table->string('ket_5_c')->nullable();
            $table->string('ket_5_d')->nullable();
            $table->string('ket_5_e')->nullable();
            $table->string('ket_5_f')->nullable();
            $table->string('total_nilai')->nullable();
            $table->string('nilai_persentase')->nullable();
            $table->string('tim_1')->nullable();
            $table->string('tim_2')->nullable();
            $table->string('tim_3')->nullable();
            $table->string('tim_4')->nullable();
            $table->string('tim_5')->nullable();
            $table->string('tim_6')->nullable();
            $table->string('tim_7')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatans');
            $table->foreign('id_desa')->references('id')->on('desas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerjasama_dan_inovasis');
    }
};
