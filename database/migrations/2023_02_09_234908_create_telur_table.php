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
        Schema::create('telur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_telur_id')->required(); 
            $table->foreign('jenis_telur_id')->references('id')->on('jenis_telur')->onDelete('cascade')->onUpdate('cascade');
            $table->string('harga', 250)->required();
            $table->string('stok', 200)->required();
            $table->enum('status', ['1', '2', '3'])->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telur');
    }
};
