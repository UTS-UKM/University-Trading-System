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

Route::match(['get','post'],'/admin/add-categories','CategoriesController@addCategories');
Route::match(['get','post'],'/admin/view-categories','CategoriesController@viewCategories');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('home');
// Password reset link request routes...
//Route::get('passwords/email', 'Auth\ResetPasswordController@getEmail');
//Route::post('passwords/email', 'Auth\ResetPasswordController@postEmail');
// Password reset routes...
//Route::get('passwords/reset/{token}', 'Auth\ResetPasswordController@getReset');
//Route::post('passwords/reset', 'Auth\ResetPasswordController@postReset');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');

Route::get('/products/favourites', 'ProductsController@index')->name('product.fav');
Route::get('/products/{product}', 'ProductsController@show')->name('product.show');
Route::post('/products/{product}/favourites', 'ProductsController@store')->name('product.fav.store');	
Route::delete('/products/{product}/favourites', 'ProductsController@destroy')->name('product.fav.destroy');
