<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <쇼핑몰 권한 관리>
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
        Schema::create('shop_admin_roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('name'); //권한그룹명
            $table->string('description')->nullable(); //권한그룹 설명
            // 권한보유 운영자수
            // 개인정보 목록조회
            // 상품관리 권한
            // 쇼핑몰수
            // 등록자
            // 등록일자
            // 최종수정자
            // 최종 수정 일자
            // 복사등록


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_admin_roles');
    }
};
