<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nommod');
            $table->string('semestremod');
            $table->foreign('nomprof')->references('NomP')->on('professeur')->onUpdate('cascade')->onDelete('cascade');
            $table->string('professeur');
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
        Schema::dropIfExists('module');
    }
}
