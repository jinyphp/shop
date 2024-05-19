<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_reviews_like', function (Blueprint $table) {
            $table->id();
            // 리뷰
            $table->unsignedBigInteger('review_id')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('shop_reviews_like');
    }
};
