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
        Schema::create('shop_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('enable')->default(1);

            $table->unsignedBigInteger('product_id');
            $table->string('product');
            $table->string('title')->nullable();;
            $table->string('review')->nullable();;

            $table->integer('rank')->default(0);

            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();

            // 인증 사용자만 가능
            // shop_reviews_like 에 기록
            $table->integer('like')->default(0);

            //계층관리
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(0);

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
        Schema::dropIfExists('shop_reviews');
    }
};
