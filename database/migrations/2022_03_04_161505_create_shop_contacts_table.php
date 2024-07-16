<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * <쇼핑몰 이메일 및 전화 연결 방법>
 * name: 쇼핑몰 이름
 * email: 쇼핑몰 이메일
 * phone: 쇼핑몰 전화번호
 * comment: 연결 시 코멘트
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
        Schema::create('shop_contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('title')->nullable();
            $table->text('content')->nullable();

            ## 처리담당자
            $table->string('manager')->nullable();

            ##
            $table->string('status')->default("new");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_contacts');
    }
};
