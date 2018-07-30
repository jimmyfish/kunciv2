<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPinjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pinjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kunci_id')->unsigned();
            $table->foreign('kunci_id')->references('id')->on('kunci')->onDelete('cascade');
            $table->integer('pengguna_id')->unsigned();
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
            $table->dateTime('waktu_pinjam');
            $table->dateTime('waktu_kembali');
            $table->boolean('is_proccessed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pinjaman');
    }
}
