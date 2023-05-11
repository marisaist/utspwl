<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahanbaku_produksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bahanbaku_id');
            $table->unsignedBigInteger('produksi_id');
            $table->integer('jumlah_bahanbaku');
            $table->foreign('bahanbaku_id')->references('id')->on('bahan_baku')->onDelete('cascade');
            $table->foreign('produksi_id')->references('id')->on('produksi')->onDelete('cascade');
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
        Schema::dropIfExists('bahanbaku_produksi');
    }
}
