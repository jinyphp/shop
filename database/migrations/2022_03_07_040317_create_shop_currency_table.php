<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <쇼핑몰 화폐>
 * enable: 사용가능한지?
 * checked: 체크여부?
 * title: 화폐 이름
 * currency: 통화 기호1
 * align: 정렬 방법
 * mark: 통화 기호2
 * rate: 환율 정보
 * dec_point: 유효소수점
 * description: 설명
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
        Schema::create('shop_currency', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('enable')->default(1);
            $table->string('checked')->default(1);
            $table->string('title');
            $table->string('currency');             //통화기호
            $table->string('align')->nullable();    //정렬방법
            $table->string('mark')->nullable();     // 통화기호
            $table->string('rate')->nullable();     // 환율정보

            $table->integer('dec_point')->default(0); // 유효소수점

            $table->string('description')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_currency');
    }
};
