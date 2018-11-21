<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' with an id of '.$id;
});
*/

// Categories Route (Admin)
Route::match(['get','post'],'/admin/add-categories','CategoriesController@addCategories');
Route::get ('/admin/view-categories','CategoriesController@viewCategories');
Route::get('deletecategories/{id}','CategoriesController@deletecategories');
Route::get('editcategories/{id}','CategoriesController@editcategories');

// Products Route (Admin EDIT)
// Route::match(['get','post'],'/admin/add-products','ProductsController@addProducts');
Route::get ('/admin/view-products','ProductsController@viewProducts');
Route::get('deleteproducts/{id}','ProductsController@deleteproducts');
// Route::get('/admin/edit-products/{id}','ProductsController@editproducts');
// Route::get('/admin/edit-products/{id}', function($id) {
//     return view('admin.products.edit-products', [
//         'data' =>App\product::where('id', $id)->get()
//     ])
//     }

// Users Route (Admin SETTLE)
Route::get ('/admin/view-users','UsersController@viewUsers');
Route::get('deleteusers/{id}','UsersController@deleteusers');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about');
Route::get('/user_profile', 'PagesController@user_profile');
Route::get('/services', 'PagesController@services');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/update', '\App\Http\Controllers\Auth\RegisterController@update');
Route::get('/edit/user/{id}','UsersController@edit');
Route::post('/edit/user/{id}','UsersController@update');
Route::get('/users', 'UsersController@index');
Route::resource('posts','PostsController');
Auth::routes();
//Route::get('/admin', function(){echo "Hello Admin";})->middleware('auth','admin');
Route::get('/admin', 'PagesController@admin');
Route::get('/customer', 'PagesController@index')->middleware('auth','customer');

Route::get ('admin/dashboard','PagesController@dashboard');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');