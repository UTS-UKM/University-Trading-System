<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use App\User;
//use App\Category;
use App\Product;
use Illuminate\Http\Request;
//use DB;

class ProductsController extends Controller
{

    public function __construct()
	{
		$this->middleware(['auth']);
	}

    public function index(Request $request){

        $products = $request->user()->favouriteProducts()->paginate(10);

		return view('fav', compact('products'));
       
    }
    
    // public function create()
    // {
    //     $categories=Category::pluck('name','id');
    //     return view('product.create',compact('categories'));
    // }

    public function store(Request $request, Product $product)
    {

        $request->user()->favouriteProducts()->syncWithoutDetaching([$product->id]);
 
        return back();

        // $formInput=$request->except('product_pic_1');
        // //        validation
        //         $this->validate($request,[
                    
        //             'product_pic_1'=>'image|mimes:png,jpg,jpeg|max:10000'
        //         ]);
        // //        image upload
        //         $query = DB::table('products')->orderBy('created_at', 'desc')->first();
        //         if(!empty($query)){
        //         $maxpid= $query->id;
        //         $newpid= $maxpid + 1;
        //     }
              
        //         $image=$request->product_pic_1;
        //         if($image){
        //             if (!isset($newpid)) {
        //                 $newpid=1;
        //             }
        //             $imageName=$newpid . "_1";
        //             $image->move('images',$imageName);
        //             $formInput['product_pic_1']=$imageName;
        //         }
        //         Product::create($formInput);
        //         return redirect()->route('index');
    }

            
    
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

   
    // public function edit($id)
    // {
    //     //
    // }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy(Request $request, Product $product)
    {
        $request->user()->favouriteProducts()->detach($product);

    	return back();
    }
}
