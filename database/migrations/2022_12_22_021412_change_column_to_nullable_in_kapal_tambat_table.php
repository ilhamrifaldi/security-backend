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
        Schema::table('kapal_tambat', function (Blueprint $table) {
            $table->date('tanggal_keluar')->nullable()->change();
            $table->time('jam_keluar')->nullable()->change();
            $table->date('tanggal_selesai_connect')->nullable()->change();
            $table->longText('keterangan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kapal_tambat', function (Blueprint $table) {
            //
        });
    }
};
