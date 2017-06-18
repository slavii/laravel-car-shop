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
            $table->integer('car_make_id')->unsigned();
            $table->foreign('car_make_id')->references('id')->on('car_makes')->onDelete('cascade');;
            $table->integer('car_model_id')->unsigned();
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('cascade');;
            $table->integer('fuel_id')->unsigned();
            $table->foreign('fuel_id')->references('id')->on('fuels')->onDelete('cascade');;
            $table->integer('gears_id')->unsigned();
            $table->foreign('gears_id')->references('id')->on('gears')->onDelete('cascade');;
            $table->integer('year');
            $table->integer('price');
            $table->integer('mileage');
            $table->integer('power');
            $table->integer('condition_id')->unsigned();
            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');;
            $table->integer('body_id')->unsigned();
            $table->foreign('body_id')->references('id')->on('bodies')->onDelete('cascade');;
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');;
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('cars');
        Schema::enableForeignKeyConstraints();
    }
}