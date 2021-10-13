<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id          ();
            $table->string      ('nokk');
            $table->string      ('nik');
            $table->string      ('nama');
            $table->string      ('jenisKelamin');
            $table->string      ('tempatLahir');
            $table->string      ('tanggalLahir');
            $table->string      ('alamat');
            $table->string      ('rt');
            $table->string      ('rw');
            $table->string      ('golonganDarah');
            $table->string      ('agama');
            $table->string      ('statusPerkawinan');
            $table->string      ('statusKeluarga');
            $table->string      ('pekerjaan');
            $table->string      ('kewarganegaraan');
            $table->string      ('statusPenduduk');
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
        Schema::dropIfExists('penduduks');
    }
}
