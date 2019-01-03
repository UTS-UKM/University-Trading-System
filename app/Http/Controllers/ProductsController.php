<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Category;
use App\Product;
use App\Click;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
class ProductsController extends Controller
{
    // public function addProducts(Request $request){
    //     if($request->isMethod('post')) {
    //         $data = $request->all();
    //         $products = new Product;
    //         $$products->name = $data['product_name'];
    //         $$products->save();
    //     }
    //     return view('admin.products.add_products');
    // }
    
    public function viewProducts(){
        $products=Product::all();
        return view('admin.products.view_products',compact('products'));
    }
    public function viewPopularProducts()   {
        
        return view('user.ViewProducts');

    }
    public function userViewProducts()  {
        $product = Product::where('user_id', Auth::user()->id)->get();
        
        $products = Product::where('user_id', Auth::user()->id)->orderBy("id")->pluck('product_name');
        
        $click = Product::select(DB::raw("SUM(clicks) as count"))->where('user_id', Auth::user()->id)
        ->orderBy("id")
        ->groupBy(DB::raw("product_name"))
        ->get()->toArray();
         $click = array_column($click, 'count');

         
    


        //$product = Product::where('user_id', auth()->user()->id)->get();
        //$categories = 
        return view('user.ViewProducts')->with(compact('product'))->with(compact('products'))->with('click',json_encode($click,JSON_NUMERIC_CHECK));

    }
    public function viewProductStats($id)    {
        $date = Click::select(DB::raw("DATE(created_at) as date"))
        ->where('product_id', $id)
        ->where('created_at', '>=', date("Y-m-d H:i:s", strtotime('-168 hours', time())))
        ->orderBy('date')
        ->groupBy('date')
        ->pluck('date');
        
       // $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $time)->format('Y-m-d');

        $click = Click::select(DB::raw("COUNT(product_id) as count"), DB::raw("DATE(created_at) as date"))
        ->where('product_id', $id)
        ->where('created_at', '>=', date("Y-m-d H:i:s", strtotime('-168 hours', time())))
        //->orderBy('date')
        ->groupBy('date')
        ->get()->toArray();
        $click = array_column($click, 'count');

        return view('user.ViewProductStats')->with(compact('date'))->with('click',json_encode($click,JSON_NUMERIC_CHECK));


    }
    public function deleteproducts($id){
        $data = DB::table('products')->where('id',$id)->delete();
//        session::flash('message','Products deleted successfully!!!');
        return redirect()->back()->with('message','Products deleted successfully');
      } 
      
      public function editproducts(Request $request, $id=null){
        $productDetails = Product::where('id',$id)->first();
        $categories = DB::table('categories')->pluck('name', 'id');
        //$menus = DB::table('products')->where('category_id','!=',$data->category)->get();
        return view ('admin/products/edit_products')
        ->with(compact('productDetails'))
        ->with(compact('categories'));
      } 
  
    public function index() {
    }
    public function category1()
    {
      
        $products = Product::where('category_id', 1)->get();
        // returns only 1
        return view('categories.category1',compact('products'));
    }

    public function category2()
    {
        $products = Product::where('category_id', 2)->get();
        return view('categories.category2',compact('products'));
    }
    public function category3()
    {
        $products = Product::where('category_id', 3)->get();
        return view('categories.category3',compact('products'));
    }
    public function category4()
    {
        $products = Product::where('category_id', 4)->get();
        return view('categories.category4',compact('products'));
    }
    public function category5()
    {
        $products = Product::where('category_id', 5)->get();
        return view('categories.category5',compact('products'));
    }
    public function category6()
    {
        $products = Product::where('category_id', 6)->get();
        return view('categories.category6',compact('products'));
    }
    public function category7()
    {
        $products = Product::where('category_id', 7)->get();
        return view('categories.category7',compact('products'));
    }
    public function category8()
    {
        $products = Product::where('category_id', 8)->get();
        return view('categories.category8',compact('products'));
    }
    public function category9()
    {
        $products = Product::where('category_id', 9)->get();
        return view('categories.category9',compact('products'));
    }
    public function category10()
    {
        $products = Product::where('category_id', 10)->get();
        return view('categories.category10',compact('products'));
    }
    public function category11()
    {
        $products = Product::where('category_id', 11)->get();
        return view('categories.category11',compact('products'));
    }
    public function category12()
    {
        $products = Product::where('category_id', 12)->get();
        return view('categories.category12',compact('products'));
    }

    public function search(Request $request){
        $searchData= $request->searchData;

        $data = DB::table('products')
        ->where('product_name', 'like', '%' .$searchData. '%')
        ->get();
        return view('pages.search',[
            'data' -> $data
        ]);
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
                    Image::make(Input::file('product_pic_1'))->resize(268, 268)->save('images/' . $imageName); 
//                    $image->move('images',$imageName);
                   
 //                   $formInput['product_pic_1']=$imageName;
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
        $this->validate($request, [
            'product_name' =>'required',
            'product_description'=>'required',
            'product_price'=>'required',
            'product_status'=>'required',
            'name'=>'required',
        ]);
        $productDetails = Product::find($id);
        $productDetails->product_name = $request ->input('product_name');
        $productDetails->product_description = $request ->input('product_description');
        $productDetails->product_price = $request ->input('product_price');
        $productDetails->product_status = $request ->input('product_status');
        $productDetails->category_id = $request ->input('name');
        $productDetails ->save();
        return redirect('/admin')->with('success', "Product Updated");
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

    $query = DB::table('products')->orderBy('id', 'desc')->first();
    if(!empty($query)){
        $productDetails = Product::where('id', $id)->first();
        if(Auth::check()){
        $productUser = DB::table('products')->where('user_id', auth()->user()->id)->get();
    }


    $newProductClicks = $productDetails->clicks + 1;
        DB::table('products')
       ->where('id', $id)
       ->update([
           'clicks' => DB::raw($newProductClicks),
       ]);

       $click = new Click;
       $click->product_id = $id;
       $click -> save();

        return view('product.detail')->with(compact('productDetails'))->with(compact('productUser'));
    }

    }
}
