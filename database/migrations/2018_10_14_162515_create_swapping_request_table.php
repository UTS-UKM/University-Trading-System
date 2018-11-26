<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwappingRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swapping_request', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('offeredProduct_id');
            $table->unsignedInteger('buyer_id');
            $table->unsignedInteger('seller_id');
            $table->string('status')->default('pending');
           
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
        Schema::table('swapping_request', function (Blueprint $table) {
        
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('offeredProduct_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('swapping_request');
    }
}
