<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noPolisi');
            $table->string('namaPemilik');
            $table->string('namaPenyewa');
            $table->string('thnPembuatan');
            $table->string('thRegistrasi');
            $table->string('noSPK');
            $table->string('periodePemakaianKlien');
            $table->string('periodePemilikMobil');
            $table->string('sopir');
            $table->integer('gaji');
            $table->integer('hargaPenyewa');
            $table->integer('hargaKePemilik');
            $table->integer('gajiDriver');
            $table->integer('feePihakKe3');
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
        Schema::dropIfExists('cars');
    }
}
