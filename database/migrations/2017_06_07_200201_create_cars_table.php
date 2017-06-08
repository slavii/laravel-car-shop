<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('make_id')->unsigned();
            $table->foreign('make_id')->references('id')->on('makes');
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('models');
            $table->integer('fuel_id')->unsigned();
            $table->foreign('fuel_id')->references('id')->on('fuels');
            $table->integer('gears_id')->unsigned();
            $table->foreign('gears_id')->references('id')->on('gears');
            $table->integer('year');
            $table->integer('condition_id')->unsigned();
            $table->foreign('condition_id')->references('id')->on('conditions');
            $table->integer('body_id')->unsigned();
            $table->foreign('body_id')->references('id')->on('bodies');
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions');
            $table->integer('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
