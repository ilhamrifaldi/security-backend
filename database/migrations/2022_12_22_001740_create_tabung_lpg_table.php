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
        Schema::create('tabung_lpg', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat_jalan');
            $table->string('nomor_kendaraan');
            $table->date('tanggal');
            $table->time('waktu');
            $table->integer('jumlah_tabung');
            $table->string('security');
            $table->string('pos');
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
        Schema::dropIfExists('tabung_lpg');
    }
};
