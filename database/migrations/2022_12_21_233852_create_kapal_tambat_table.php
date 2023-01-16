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
        Schema::create('kapal_tambat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('nama_kapal');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->date('tanggal_mulai_connect');
            $table->date('tanggal_selesai_connect');
            $table->string('lokasi');
            $table->string('security');
            $table->string('pos');
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
        Schema::dropIfExists('kapal_tambat');
    }
};
