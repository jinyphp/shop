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
        Schema::create('shop_currency', function (Blueprint $table) {
            $table->id();
            $table->string('enable')->default(1);
            $table->string('checked')->default(1);
            $table->string('title');
            $table->string('currency');             //통화기호
            $table->string('align')->nullable();    //정렬방법
            $table->string('mark')->nullable();     // 통화기호
            $table->string('rate')->nullable();     // 환율정보

            $table->integer('dec_point')->default(0); // 유효소수점

            $table->string('description')->nullable();

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
        Schema::dropIfExists('shop_currency');
    }
};
