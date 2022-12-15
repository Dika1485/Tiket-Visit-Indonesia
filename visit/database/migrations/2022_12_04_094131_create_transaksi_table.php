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
            $table->id();
            $table->string('kode');
            $table->string('midtrans_id')->nullable();
            $table->string('payment_code')->nullable();
            $table->integer('menu_id');
            $table->integer('user_id');
            $table->integer('jumlah');
            $table->integer('total');
            $table->string('status');
            $table->string('metode')->nullable();
            $table->date('schedule')->nullable();
            $table->string('pdf_url')->nullable();
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
