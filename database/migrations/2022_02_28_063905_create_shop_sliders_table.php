<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <쇼핑몰 슬라이더(?)>
 * title:제목
 * subtitle: 부제목
 * price: 쇼핑몰 가격
 * link: 쇼핑몰 링크
 * image: 쇼핑몰 로고
 * status: 상태?
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
        Schema::create('shop_sliders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('price')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();;
            $table->boolean('status')->default(false);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_sliders');
    }
};
