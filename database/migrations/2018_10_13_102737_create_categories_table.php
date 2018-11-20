<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->timestamps();


    });

    DB::table('categories')->insert(array(
        array('id'=>'1', 'name'=>'Electronic Devices'),
        array('id'=>'2', 'name'=>'Electronic Accessories'),
        array('id'=>'3', 'name'=>'TV & Home Appliances'),
        array('id'=>'4', 'name'=>'Health & Beauty'),
        array('id'=>'5', 'name'=>'Babies & Toys'),
        array('id'=>'6', 'name'=>'Groceries & Pets'),
        array('id'=>'7', 'name'=>'Home & Lifestyle'),
        array('id'=>'8', 'name'=>'Womens Fashion'),
        array('id'=>'9', 'name'=>'Mens Fashion'),
        array('id'=>'10', 'name'=>'Automotive & Motorcycles'),
        array('id'=>'11', 'name'=>'Fashion Accessories'),
        array('id'=>'12', 'name'=>'Sports & Travel'),

    ));
    DB::statement("ALTER TABLE ".DB::getTablePrefix()."categories CHANGE created_at created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL");
    DB::statement("ALTER TABLE ".DB::getTablePrefix()."categories CHANGE updated_at updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL");
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }

   
         
    }

