<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToCuisineRestaurant extends Migration
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
            $table->foreign('res_id')->references('id')->on('restaurants')->onDelete('cascade');
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
            $table->dropForeign('cuisine_restaurant_cuisine_id_foreign');
            $table->dropForeign('cuisine_restaurant_res_id_foreign');
        });
    }
}
