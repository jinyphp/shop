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
        Schema::create('shop_manager', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('enable')->default(1);

            ## 사용자정보
            $table->string('user')->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();

            ## 역할
            $table->string('role')->nullable();

            ## 상위관리자
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
        Schema::dropIfExists('shop_manager');
    }
};
