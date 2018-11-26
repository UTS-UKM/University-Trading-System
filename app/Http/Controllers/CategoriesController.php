<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use DB;

class CategoriesController extends ProductsController
{

    public function addCategories(Request $request){
        if($request->isMethod('post')) {
            $data = $request->all();

            $category = new Category;
            $category->name = $data['name'];
            $category->save();
        }
        return view('admin.categories.add_categories');
    }

    public function viewCategories(){
        $category=Category::all();
        return view('admin.categories.view_categories',compact('category'));
    }

    public function deleteCategories($id){
        $data = DB::table('categories')->where('id',$id)->delete();
        // session::flash('message','Products deleted successfully!!!');
        return redirect()->back()->with('message','Products deleted successfully');
      } 

      public function editCategories($id){
        $data = DB::table('categories')->where('id',$id)->first();
        $menus = DB::table('categories')->where('id','!=',$data->category)->get();
        return view ('admin.categories.edit_categories',['data'=>$data,'menus'=>$menus]);
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
