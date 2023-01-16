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
        Schema::table('truk_tangki', function (Blueprint $table) {
            $table->string('nomor_kendaran')->nullable()->change();
            $table->string('nomor_surat_jalan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('truk_tangki', function (Blueprint $table) {
            //
        });
    }
};
