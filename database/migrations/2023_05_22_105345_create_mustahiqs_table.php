<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMustahiqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mustahiqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muzzaki_id');
            // $table->foreignId('kategori_mustahiq_id');
            $table->string('nama');
            $table->string('Kategori');
            $table->string('JenisHak');
            $table->string('Hak');
            $table->timestamps();

            $table->foreign('muzzaki_id')->references('id')->on('muzzakis')->onDelete('cascade');
            // $table->foreign('kategori_mustahiq_id')->references('id')->on('kategori_mustahiqs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mustahiqs');
    }
}
