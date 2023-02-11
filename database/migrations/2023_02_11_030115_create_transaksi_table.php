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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_trx', 150)->required();
            $table->string('nama', 250)->required();
            $table->date('tgl_trx')->required();
            $table->enum('status', ['1', '2', '3'])->required();
            $table->string('bukti_transaksi', 250)->required();
            $table->string('harga_total', 250)->required();
            $table->string('uang_masuk', 250)->required();
            $table->string('kembalian', 250)->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
