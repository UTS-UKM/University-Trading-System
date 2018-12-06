<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use DB;
class CategoriesController extends ProductsController
{

    public function viewCategories(){
        $categories =Category::all();
        return view('admin.categories.view_categories ',compact('categories'));
    }

    
    public function addCategories(Request $request){
        if($request->isMethod('post')) {
            $data = $request->all();
            $categories = new Category;
            $$categories ->name = $data['name'];
            $$categories ->save();
        }
        return view('admin.categories.add_categories');
    }
    

    public function deleteCategories($id){
        $data = DB::table('categories')->where('id',$id)->delete();
//        session::flash('message','Products deleted successfully!!!');
        return redirect()->back()->with('message','Category deleted successfully');
      } 
      public function editCategories(){
        $categories =Category::all();
        return view('admin.categories.edit_categories ',compact('categories'));
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
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
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