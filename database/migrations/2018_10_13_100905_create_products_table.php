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
            $table->increments('ItemID');
            $table->String('UserID');
            $table->string('CategoryID');
            $table->String('ItemName');
            $table->float('ItemPrice');
            $table->string('ItemDescription');
            $table->string('ItemImage')->nullable();;
            $table->string('ItemStatus');
            

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
