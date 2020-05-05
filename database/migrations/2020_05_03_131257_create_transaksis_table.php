<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('id_pembeli')->unsigned();
            $table->foreign('id_pembeli')->references('kode_pembeli')->on('pembeli')->onDelete('cascade');
            $table->integer('id_barang')->unsigned();
            $table->foreign('id_barang')->references('kode_barang')->on('barangs')->onDelete('cascade');
            $table->dateTime('tgl_beli');	
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
        Schema::dropIfExists('transaksis');
    }
}
