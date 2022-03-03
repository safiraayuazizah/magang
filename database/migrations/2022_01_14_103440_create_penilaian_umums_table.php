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
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->string('nama_penilai');
            $table->string('jabatan');
            
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('penilaian_umums');
    }
}
