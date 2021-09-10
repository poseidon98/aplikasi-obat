<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('kode_obat', 10);
            $table->string('nama_obat', 70);
            $table->integer('stok');
            $table->string('satuan_obat', 20);
            $table->string('jenis_barang', 30);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->date('tgl_kadaluarsa', 20);
            $table->string('user', 30);
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
        Schema::dropIfExists('medicines');
    }
}
