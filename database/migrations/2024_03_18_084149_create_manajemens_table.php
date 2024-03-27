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
        Schema::create('manajemens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_bumdesa');
            $table->foreign('id_bumdesa')->references('id')->on('bumdesas');
            $table->string('tahun')->nullable();
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
            $table->string('ket_5_a')->nullable();
            $table->string('ket_5_b')->nullable();
            $table->integer('nilai_6_a')->nullable();
            $table->integer('nilai_6_b')->nullable();
            $table->string('ket_6_a')->nullable();
            $table->string('ket_6_b')->nullable();
            $table->string('total_nilai')->nullable();
            $table->string('nilai_persentase')->nullable();
            $table->string('tim_1')->nullable();
            $table->string('tim_2')->nullable();
            $table->string('tim_3')->nullable();
            $table->string('tim_4')->nullable();
            $table->string('tim_5')->nullable();
            $table->string('tim_6')->nullable();
            $table->string('tim_7')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manajemens');
    }
};
