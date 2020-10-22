<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenditures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('pt_membeli');
            $table->string('pt_menjual');
            $table->string('bukti');
            $table->string('tanggal');
            $table->string('jumlah_barang');
            $table->string('alamat');
            $table->string('kualitas');
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
        Schema::dropIfExists('expenditures');
    }
}
