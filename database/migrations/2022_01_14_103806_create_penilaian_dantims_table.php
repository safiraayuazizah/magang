<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianDantimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_dantims', function (Blueprint $table) {
                $table->id();
                $table->string('nama_dantim');
                $table->string('etika');
                $table->string('disiplin' );
                $table->string('tanggung_jawab');
                $table->string('perencanaan');
                $table->string('teamwork');
                $table->string('kepemimpinan');
                $table->string('problem_solve');
                $table->string('inovasi');
                $table->string('analisa_pemikiran');
                $table->string('kejujuran');

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_dantims');
    }
}
