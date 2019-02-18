<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlterUIdToRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            if(Schema::hasColumn('restaurants','user_id'))
            {
                // $table->dropForeign(['user_id']);
                $table->dropColumn(['user_id']);
            }
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('restaurant_owners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropColumn(['owner_id']);
        });
    }
}
