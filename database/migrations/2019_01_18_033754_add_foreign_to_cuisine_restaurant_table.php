<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToCuisineRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuisine_restaurant', function (Blueprint $table) {
            $table->foreign('cuisine_id')->references('id')->on('cuisines')->onDelete('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuisine_restaurant', function (Blueprint $table) {
            $table->dropForeign(['cuisine_id']);
            $table->dropForeign(['restaurant_id']);
        });
    }
}
