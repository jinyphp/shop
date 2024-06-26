<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <판매자 정보>
 * enable: 노출 여부
 * seller: 판매자 이름
 * email: 판매자 이메일
 * password: 판매자 비밀번호
 * site: 판매자의 사이트?
 * title
 * phone: 판매자 전화번호
 * post:
 * address:
 * manager:
 * comment: 판매자 설명
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
        Schema::create('shop_seller', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('enable')->default(1);

            $table->string('seller');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('site')->nullable();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->string('post')->nullable();
            $table->string('address')->nullable();
            $table->string('manager')->nullable();
            $table->string('comment')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_seller');
    }
};
