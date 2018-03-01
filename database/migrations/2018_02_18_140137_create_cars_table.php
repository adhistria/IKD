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
            $table->string('noPolisi',20);
            $table->string('type',30);
            $table->string('namaPemilik',40);
            $table->string('namaPenyewa',50);
            $table->string('thnPembuatan',4);
            $table->string('thRegistrasi',4);
            $table->string('noSPK')->nullable();
            $table->string('periodePemakaianKlien',50);
            $table->string('periodePemilikMobil',50);
            $table->string('sopir')->nullable();
            $table->integer('gaji')->nullable();
            $table->integer('hargaPenyewa');
            $table->integer('ppn');
            $table->integer('pph');
            $table->integer('totalHargaPenyewa');
            $table->integer('hargaKePemilik');
            $table->integer('pphPemilik');
            $table->integer('gajiDriver')->nullable();
            $table->integer('feePihakKe3')->nullable();
            $table->integer('feeManajemen')->nullable();
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
