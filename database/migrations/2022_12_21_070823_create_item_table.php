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
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('nomor_do');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('nama_pembawa_barang');
            $table->string('nama_pemilik_barang');
            $table->string('security');
            $table->string('pos');
            $table->string('list_barang');
            $table->softDeletes();
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
        Schema::dropIfExists('item');
    }
};
