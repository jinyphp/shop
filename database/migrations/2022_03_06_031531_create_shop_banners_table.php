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
        Schema::create('shop_banners', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('shop_banners');
    }
};
