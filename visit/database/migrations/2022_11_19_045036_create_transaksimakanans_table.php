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
        Schema::create('transaksimakanans', function (Blueprint $table) {
            $table->id();
            $table->uuid("id_transaksi");
            $table->foreignId('makanan_id')->constrained()->onDelete('cascade');
            $table->foreignId('akun_id')->constrained()->onDelete('cascade');
            $table->integer('jumlah');
            $table->string('status');
            $table->string('metode')->nullable();
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
