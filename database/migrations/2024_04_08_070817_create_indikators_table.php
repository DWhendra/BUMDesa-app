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
        Schema::create('indikators', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_bumdesa');
            $table->foreign('id_bumdesa')->references('id')->on('bumdesas');
            $table->enum('kategori', ['kelembagaan', 'manajemen', 'usaha dan unit usaha', 'kerjasama dan inovasi', 'aset dan permodalan', 'adminstrasi laporan keuangan dan akuntabilitas', 'keuntungan dan manfaat']);
            $table->string('tahun');

            $table->integer('nilai_1_a')->nullable();
            $table->integer('nilai_1_b')->nullable();
            $table->integer('nilai_1_c')->nullable();
            $table->integer('nilai_1_d')->nullable();
            $table->integer('nilai_1_e')->nullable();
            $table->string('ket_1_a')->nullable();
            $table->string('ket_1_b')->nullable();
            $table->string('ket_1_c')->nullable();
            $table->string('ket_1_d')->nullable();
            $table->string('ket_1_e')->nullable();

            $table->integer('nilai_2_a')->nullable();
            $table->integer('nilai_2_b')->nullable();
            $table->integer('nilai_2_c')->nullable();
            $table->integer('nilai_2_d')->nullable();
            $table->string('ket_2_a')->nullable();
            $table->string('ket_2_b')->nullable();
            $table->string('ket_2_c')->nullable();
            $table->string('ket_2_d')->nullable();

            $table->integer('nilai_3_a')->nullable();
            $table->integer('nilai_3_b')->nullable();
            $table->integer('nilai_3_c')->nullable();
            $table->integer('nilai_3_d')->nullable();
            $table->string('ket_3_a')->nullable();
            $table->string('ket_3_b')->nullable();
            $table->string('ket_3_c')->nullable();
            $table->string('ket_3_d')->nullable();

            $table->integer('nilai_4_a')->nullable();
            $table->integer('nilai_4_b')->nullable();
            $table->integer('nilai_4_c')->nullable();
            $table->integer('nilai_4_d')->nullable();
            $table->string('ket_4_a')->nullable();
            $table->string('ket_4_b')->nullable();
            $table->string('ket_4_c')->nullable();
            $table->string('ket_4_d')->nullable();

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

            $table->integer('nilai_6_a')->nullable();
            $table->integer('nilai_6_b')->nullable();
            $table->string('ket_6_a')->nullable();
            $table->string('ket_6_b')->nullable();

            $table->integer('nilai_5_aa')->nullable();
            $table->integer('nilai_5_ab')->nullable();
            $table->integer('nilai_5_ac')->nullable();
            $table->integer('nilai_5_ba')->nullable();
            $table->integer('nilai_5_bb')->nullable();
            $table->integer('nilai_5_bc')->nullable();
            $table->integer('nilai_5_ca')->nullable();
            $table->integer('nilai_5_cb')->nullable();
            $table->integer('nilai_5_cc')->nullable();
            $table->string('ket_5_aa')->nullable();
            $table->string('ket_5_ab')->nullable();
            $table->string('ket_5_ac')->nullable();
            $table->string('ket_5_ba')->nullable();
            $table->string('ket_5_bb')->nullable();
            $table->string('ket_5_bc')->nullable();
            $table->string('ket_5_ca')->nullable();
            $table->string('ket_5_cb')->nullable();
            $table->string('ket_5_cc')->nullable();

            $table->string('total_nilai')->nullable();
            $table->string('nilai_persentase')->nullable();
            $table->string('tim_1')->nullable();
            $table->string('tim_2')->nullable();
            $table->string('tim_3')->nullable();
            $table->string('tim_4')->nullable();
            $table->string('tim_5')->nullable();
            $table->string('tim_6')->nullable();
            $table->string('tim_7')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikators');
    }
};
