<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

class Product extends Model
{
    protected $fillable=['product_name','category_id','user_id','product_price','product_description','product_pic_1'];
    //

    public function user()    {
         return $this->belongsTo('App\User');
    }
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
        public function favourites()
    {
    return $this->morphToMany(User::class, 'favouriteables');
    }
       public function favouritedBy($product_id)
       {
        $user_id = auth()->user()->id;
        return Favourite::where('user_id', '=', $user_id)->where('favouriteables_id', '=', $product_id)->exists();

       }
 
    public function productDetail($id)

    {

        return $productDetails = Product::where('id', $id)->get();

     }
    
}


