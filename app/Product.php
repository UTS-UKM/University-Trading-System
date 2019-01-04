<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Laravel\Scout\Searchable;

class Product extends Model
{

     use Searchable;
     
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
       public function favouritedBy($product_id)
       {
        $user_id = auth()->user()->id;
        return Favourite::where('user_id', '=', $user_id)->where('favouriteables_id', '=', $product_id)->exists();

       }
       public function getFavId($product_id){
        $user_id = auth()->user()->id;
        $fav = Favourite::where('user_id', '=', $user_id)->where('favouriteables_id', '=', $product_id)->first();
        return $fav->id;

       }
 
    public function productDetail($id)
    {
        return $productDetails = Product::where('id', $id)->get();
     }
    
}


