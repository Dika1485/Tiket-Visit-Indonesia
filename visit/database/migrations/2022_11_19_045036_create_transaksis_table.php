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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('id_wisata');
            $table->string('id_akun');
            $table->foreign('id_wisata')->references('id')->on('wisatas');
            $table->foreign('id_akun')->references('id')->on('wisatas');
            $table->integer('jumlah');
            $table->string('status');
            $table->string('metode')->nullable();
            $table->date('schedule')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
};
