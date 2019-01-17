<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToFeatureRestaurant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feature_restaurant', function (Blueprint $table) {
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
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
        Schema::table('feature_restaurant', function (Blueprint $table) {
            $table->dropForeign(['feature_id']);
            $table->dropForeign(['res_id']);
        });
    }
}
