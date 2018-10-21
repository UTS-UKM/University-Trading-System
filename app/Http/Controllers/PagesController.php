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
        $title = 'Welcome To Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
       
    }

  

    public function user_profile(){ 
        return view('pages.user_profile');
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
