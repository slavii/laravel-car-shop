<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('make_id')->unsigned();
            $table->foreign('make_id')->references('id')->on('makes');
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('models');
            $table->integer('year');
            $table->integer('price');
            $table->string('fuel');
            $table->integer('power');
            $table->string('condition');
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
        Schema::dropIfExists('addcars');
    }
}
