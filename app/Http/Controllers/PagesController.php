<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Product;
use DB;
class PagesController extends Controller
{
    //
    public function index() {
        
        $products=Product::all();
        return view('pages.index',compact('products'));
    }
  
    public function user_profile(){ 
        return view('pages.user_profile');
    }
    public function admin(){ 
        $productname = Product::orderBy('clicks', 'desc')
        ->limit(10)
        ->pluck('product_name')
        ;
        $productFavourite=Product::orderBy('clicks', 'desc')
        ->limit(10)
        ->pluck('favourited')
        ;

        $products=Product::orderBy('id', 'desc')->get();

        $click = Product::select(DB::raw("SUM(clicks) as count"))
        ->orderBy('clicks', 'desc')
        ->limit(10)
        ->groupBy(DB::raw("product_name"))
        ->get()->toArray();
         $click = array_column($click, 'count');

        return view('admin.index')->with(compact('products'))->with(compact('productFavourite'))->with(compact('productname'))->with('click',json_encode($click,JSON_NUMERIC_CHECK));

    }
    public function ViewRequests(){ 
        return view('user.Requests');

    }
      
    public function about() {
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services'=>['Web', 'Programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}