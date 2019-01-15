<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToRatingValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rating_value', function (Blueprint $table) {
            $table->foreign('review_id')->references('review_id')->on('reviews')->onDelete('cascade');
            $table->foreign('rate_id')->references('rate_id')->on('rating_individual')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rating_value', function (Blueprint $table) {
            //
        });
    }
}
