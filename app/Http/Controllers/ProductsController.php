<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index(){
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('product_pic_1');
        //        validation
                $this->validate($request,[
                    
                    'product_pic_1'=>'image|mimes:png,jpg,jpeg|max:10000'
                ]);
        //        image upload
                $query = DB::table('products')->orderBy('created_at', 'desc')->first();
                if(!empty($query)){
                $maxpid= $query->id;
                $newpid= $maxpid + 1;
            }
              
                $image=$request->product_pic_1;
                if($image){
                    if (!isset($newpid)) {
                        $newpid=1;
                    }
                    $imageName=$newpid . "_1";
                    $image->move('images',$imageName);
                    $formInput['product_pic_1']=$imageName;
                }
                Product::create($formInput);
                return redirect()->route('index');
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
