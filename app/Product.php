<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
