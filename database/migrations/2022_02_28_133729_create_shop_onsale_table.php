<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 관리자: 쇼핑몰
 * 상품 할인행사
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
        Schema::create('shop_onsale', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            ## 활성화
            $table->string('enable')->nullable();

            ## 출력 순위
            $table->integer('pos')->default(1);

            ## 행사기간
            $table->dateTime('sale_start')->nullable();
            $table->dateTime('sale_end')->nullable();

            ## 행사 상태
            $table->boolean('status')->nullable();

            ## 제목
            $table->boolean('title')->nullable();;

            ## 상세내용
            $table->text('content')->nullable();

            ## 행사 베너 이미지
            $table->text('image')->nullable();

            ## 카테고리 관리자 아이디
            $table->string('manager')->nullable();

            ## 메모
            $table->text('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_onsale');
    }
};
