<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperviseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superviseur', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('CINsup')->unique();
            $table->string('nomsup');
            $table->string('prenomsup');
            $table->string('emailsup')->unique();
            $table->string('numerosup');
            $table->string('passwordsup');
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
        Schema::dropIfExists('superviseur');
    }
}
