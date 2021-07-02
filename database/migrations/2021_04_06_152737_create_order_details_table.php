<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->bigInteger('price');
            $table->integer('quantity');
            $table->bigInteger('total');
            $table->dateTime('order_date_time');
            $table->dateTime('delivered_date_time')->nullable();
            $table->bigInteger('status')->comment('0 = pending, 1= delivered, 2 = canceled');
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
        Schema::dropIfExists('order_details');
    }
}
