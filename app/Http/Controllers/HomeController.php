<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showProduct()
    {
        $products = Products::all();
        return view('product.store',compact('$products'));
    }

    public function show($slug)
    {
        $products = Products::where('slug',$slug)->first();
        return view('store.show',compact('products'));
    }
}
