<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->string('item_name');
            $table->float('item_price', 8, 2);	
            $table->mediumText('item_description');
            $table->string('item_pic_1');
            $table->string('item_pic_2')->nullable();
            $table->string('item_pic_3')->nullable();
            $table->string('item_pic_4')->nullable();
            $table->string('item_status')->default('available');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

        Schema::table('item', function (Blueprint $table) {
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
