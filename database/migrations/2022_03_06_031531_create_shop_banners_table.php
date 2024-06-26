<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <쇼핑몰 배너 로고?>
 * enable: 사용가능한지?
 * code: 배너코드?
 * link:
 * start:
 * end:
 * image: 배너 이미지
 * width: 배너 넓이
 * height: 배너 높이
 * description: 배너 설명
 * template: 배너 템플릿
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('enable')->default(1);
            $table->string('code');
            $table->string('link')->nullable();

            $table->string('start')->nullable();
            $table->string('end')->nullable();

            $table->string('image')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();




            $table->string('description')->nullable();
            $table->string('template')->default('basic');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_banners');
    }
};
