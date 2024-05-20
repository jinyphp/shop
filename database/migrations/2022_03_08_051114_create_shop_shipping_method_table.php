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
        Schema::create('shop_shipping_method', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ref')->default(0);
            $table->integer('level')->default(0);
            $table->integer('pos')->default(1);

            $table->string('enable')->default(1);
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('priod')->nullable();

            $table->string('manager_name')->nullable();
            $table->string('manager_phone')->nullable();


            $table->string('depature')->nullable(); // 출발지
            $table->string('arrive')->nullable();
            $table->string('cost')->nullable();
            $table->string('country')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_shipping_method');
    }
};
