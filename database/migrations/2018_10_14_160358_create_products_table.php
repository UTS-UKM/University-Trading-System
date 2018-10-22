<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->string('product_name');
            $table->float('product_price', 8, 2);	
            $table->mediumText('product_description');
            $table->string('product_pic_1');
            $table->string('product_pic_2')->nullable();
            $table->string('product_pic_3')->nullable();
            $table->string('product_pic_4')->nullable();
            $table->string('product_status')->default('available');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

        Schema::table('products', function (Blueprint $table) {
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
