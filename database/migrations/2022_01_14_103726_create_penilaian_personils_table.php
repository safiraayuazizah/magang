<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianPersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_personils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_personil');
            $table->string('etika');
            $table->string('disiplin' );
            $table->string('tanggung_jawab');
            $table->string('teamwork');
            $table->string('problem_solve');
            $table->string('kepatuhan');
            $table->string('kejujuran');
            $table->string('inisiatif');
            $table->string('komunikasi');
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
        Schema::dropIfExists('penilaian_personils');
    }
}
