<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Product;
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
    public function admin_swapping_request(){ 
        return view('admin.SwappingRequests.Request');

    }
    public function admin(){ 
        $products=Product::orderBy('id', 'desc')->get();
        return view('admin.index',compact('products'));

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