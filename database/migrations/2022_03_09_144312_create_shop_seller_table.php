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
        Schema::create('shop_seller', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('shop_seller');
    }
};
