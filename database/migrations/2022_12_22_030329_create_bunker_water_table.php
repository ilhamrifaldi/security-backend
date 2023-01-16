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
        Schema::create('bunker_water', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_po_wo')->nullable();
            $table->string('nama_kapal');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->time('jam_mulai');
            $table->time('jam_selesai')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('security');
            $table->string('pos');
            $table->string('nomor_invoice')->nullable();
            $table->longText('keterangan');
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
        Schema::dropIfExists('bunker_water');
    }
};
