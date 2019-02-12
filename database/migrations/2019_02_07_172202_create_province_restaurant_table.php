<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinceRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province_restaurant', function (Blueprint $table) {
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('restaurant_id');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
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
        Schema::dropIfExists('province_restaurant');
    }
}
