<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToReviewLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('review_like', function (Blueprint $table) {
            $table->foreign('u_id')->references('u_id')->on('users')->onDelete('cascade');
            $table->foreign('review_id')->references('review_id')->on('reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_like', function (Blueprint $table) {
            
        });
    }
}
