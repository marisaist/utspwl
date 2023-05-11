<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('produksi', function (Blueprint $table) {
      $table->id();
      $table->string('kode_produk');
      $table->string('nama_produk');
      $table->integer('jumlah_produksi');
      $table->date('tanggal_produksi');
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
    Schema::dropIfExists('produksi');
  }
}
