<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendrierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendrier', function (Blueprint $table) {
            $table->id();
            $table->string('Date');
            $table->foreign('classid')->references('id')->on('classe');
            $table->unsignedBigInteger('classid');
            $table->foreign('module')->references('nommodule')->on('module');
            $table->string('module');



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
        Schema::dropIfExists('calendrier');
    }
}
