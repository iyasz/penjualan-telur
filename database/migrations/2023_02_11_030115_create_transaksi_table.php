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
            $table->enum('status', ['1', '2', '3']);
            $table->string('bukti_transaksi', 250);
            $table->string('harga_total', 250);
            $table->string('uang_masuk', 250);
            $table->string('kembalian', 250);
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
