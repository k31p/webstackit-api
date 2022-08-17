<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasi', function(Blueprint $table){
            $table->id("idKonsultasi");
            $table->integer("idPasien");
            $table->string("penyakit");
            $table->integer("idDokter");
            $table->timestamp("tanggal_konsultasi");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsultasi');
    }
};
