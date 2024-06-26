<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMustahiqLainnyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mustahiq__lainnyas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('Kategori');
            $table->string('JenisHak');
            $table->string('Hak');
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
        Schema::dropIfExists('mustahiq__lainnyas');
    }
}
