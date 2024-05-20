<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarZakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_zakats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muzzaki_id');
            $table->string('nama_KK');
            $table->integer('tanggungan');
            $table->string('jenis_bayar');
            $table->integer('tanggungan_dibayar');
            $table->string('Beras')->nullable();
            $table->string('Uang')->nullable();
            $table->timestamps();

            $table->foreign('muzzaki_id')->references('id')->on('muzzakis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_zakats');
    }
}
