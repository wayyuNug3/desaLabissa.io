<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratketeranganusahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratketeranganusahas', function (Blueprint $table) {
            $table->id          ();
            $table->foreignId   ('penduduk_id');
            $table->string      ('noSurat');
            $table->string      ('jenisUsaha');
            $table->string      ('alamatUsaha');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratketeranganusahas');
    }
}
