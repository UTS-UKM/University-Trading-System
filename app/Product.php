<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use DB;

class Product extends Model
{
    protected $fillable=['product_name','category_id','user_id','product_price','product_description','product_pic_1'];
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }
    public function userProducts()
    {
         return $userProducts = DB::table('products')->where('user_id', auth()->id())->get();
    }
    public function productDetail($id)

    {

        return $productDetails = Product::where('id', $id)->get();

     }
    
}
