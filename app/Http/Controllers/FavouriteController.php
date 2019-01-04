<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Favourite;
use App\Product;
use Auth;
use DB;

class FavouriteController extends Controller
{
   public function index($id){
        $favourites=Favourite::where('user_id', '=', $id)->get();
        return view('user.Fav',compact('favourites'));
   } 
	public function store (Request $request, $product_id){

    $productDetails = Product::where('id', $product_id)->first();
    $newFavourited = $productDetails->favourited + 1;
        DB::table('products')
       ->where('id', $product_id)
       ->update([
           'favourited' => DB::raw($newFavourited),
       ]);
       //        validation
       $this->validate($request,[
        'user_id'=>'required',
        'favouritble_id'=>'required',
        'favouriteable_type'=>'required'
    ]);

       $favourite = new Favourite;
       $favourite->user_id = $request->input('user_id');
       $favourite->favouriteables_id = $request ->input('favouritble_id');
       $favourite->favouriteables_type = $request ->input('favouriteable_type');
       $favourite -> save();

       return redirect('/');
	}
  public function delete($id){
    $fav = Favourite::findOrFail($id);
    $fav->delete();
       return redirect('/');
  }
    
}
