<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Category;
use App\Product;
use App\Http\Controllers\Products;
use Illuminate\Http\Request;
use DB;
use Intervention\Image\ImageManagerStatic as Image;



class ProductsController extends Controller
{

    public function addProducts(Request $request){
        if($request->isMethod('post')) {
            $data = $request->all();

            $products = new Products;
            $$products->name = $data['product_name'];
            $$products->save();
        }
        return view('admin.products.add_products');
    }

    public function viewProducts(){
        $products=Product::all();
        return view('admin.products.view_products',compact('products'));
    }

    public function deleteproducts($id){
        $data = DB::table('products')->where('id',$id)->delete();
//        session::flash('message','Products deleted successfully!!!');
        return redirect()->back()->with('message','Products deleted successfully');
      } 

      public function editproducts($id){
        $data = DB::table('products')->where('id',$id)->first();
        $menus = DB::table('products')->where('category_id','!=',$data->category)->get();
        return view ('backend.updates.post',['data'=>$data,'menus'=>$menus]);
      } 
  
    public function index() {

    }

    public function category1()
    {
      
        $products = Product::all();// returns only 1
        return view('categories.category1',compact('products'));
    }
    public function category2()
    {
        $products = Product::all();// returns only 1
        return view('categories.category2',compact('products'));
    }
    public function category3()
    {
        $products = Product::all();// returns only 1
        return view('categories.category3',compact('products'));
    }
    public function category4()
    {
        $products = Product::all();// returns only 1
        return view('categories.category4',compact('products'));
    }
    public function category5()
    {
        $products = Product::all();// returns only 1
        return view('categories.category5',compact('products'));
    }
    public function category6()
    {
        $products = Product::all();// returns only 1
        return view('categories.category6',compact('products'));
    }
    public function category7()
    {
        $products = Product::all();// returns only 1
        return view('categories.category7',compact('products'));
    }
    public function category8()
    {
        $products = Product::all();// returns only 1
        return view('categories.category8',compact('products'));
    }
    public function category9()
    {
        $products = Product::all();// returns only 1
        return view('categories.category9',compact('products'));
    }
    public function category10()
    {
        $products = Product::all();// returns only 1
        return view('categories.category10',compact('products'));
    }
    public function category11()
    {
        $products = Product::all();// returns only 1
        return view('categories.category11',compact('products'));
    }
    public function category12()
    {
        $products = Product::all();// returns only 1
        return view('categories.category12',compact('products'));
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
        'product_name'=>'required',
        'product_description'=>'required',
        'product_price'=>'required',
        'product_pic_1'=>'image|mimes:png,jpg,jpeg|max:10000'
    ]);
    
        //        image upload
        
                $query = DB::table('products')->orderBy('id', 'desc')->first();
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
        $product = Product::find( $id );

   	return view( 'product/detail' )
   		->with( 'product', $product );
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
    public function product($id)    
    {
        $productDetails = Product::where('id', $id)->first();
        $productUser = DB::table('products')->where('user_id', auth()->user()->id)->get();
        return view('product.detail')->with(compact('productDetails'))->with(compact('productUser'));

    }
}
