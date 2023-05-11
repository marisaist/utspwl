<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengiriman');
            $table->date('tanggal_pengiriman');
            $table->integer('jumlah_produk');
            $table->string('alamat_pengiriman');
            $table->unsignedBigInteger('produksi_id');
            $table->foreign('produksi_id')->references('id')->on('produksi');
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
        Schema::dropIfExists('pengiriman');
    }
}
