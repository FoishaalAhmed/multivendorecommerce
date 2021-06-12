<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('seller_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned();
            $table->bigInteger('child_category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->string('name');
            $table->string('slug', 355)->index();
            $table->float('price', 11, 2);
            $table->float('old_price', 11, 2)->nullable();
            $table->float('discount_percent', 5, 2)->nullable();
            $table->float('discount', 11, 2)->nullable();
            $table->string('tags')->nullable();
            $table->longText('description')->nullable();
            $table->string('display');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('child_category_id')->references('id')->on('child_categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
