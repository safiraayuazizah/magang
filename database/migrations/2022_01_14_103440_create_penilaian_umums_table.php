<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_umums', function (Blueprint $table) {
            $table->id();
            $table->string('judul_acara');
            $table->string('tanggal');
            $table->string('waktu');
            $table->string('tempat');
            $table->string('nama_penilai');
            $table->string('jabatan');
            $table->string('n_personil');
            $table->string('Etika');
            $table->string('Disiplin');
            $table->string('Tanggung_jawab');
            $table->string('kerjasama');
            $table->string('pemecahan_masalah');
            $table->string('kepatuhan');
            $table->string('kejujuran');
            $table->string('inisiatif');
            $table->string('komunikasi');




            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('penilaian_umums');
    }
}
