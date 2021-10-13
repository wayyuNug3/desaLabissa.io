<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfiledesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiledesas', function (Blueprint $table) {
            $table->id();
            $table->string('namaDesa');
            $table->string('sejarahDesa');
            $table->string('koordinatDesa');
            $table->string('logoDesa')->default('logo.jpg');
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
        Schema::dropIfExists('profiledesas');
    }
}
