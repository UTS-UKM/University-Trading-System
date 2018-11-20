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

Route::get('/category1','ProductsController@category1');
Route::get('/category2','CategoriesController@category2');
Route::get('/category3','CategoriesController@category3');
Route::get('/category4','CategoriesController@category4');
Route::get('/category5','CategoriesController@category5');
Route::get('/category6','CategoriesController@category6');
Route::get('/category7','CategoriesController@category7');
Route::get('/category8','CategoriesController@category8');
Route::get('/category9','CategoriesController@category9');
Route::get('/category10','CategoriesController@category10');
Route::get('/category11','CategoriesController@category11');
Route::get('/category12','CategoriesController@category12');



Route::get('/about', 'PagesController@about');
Route::get('/user/ViewRequests', 'PagesController@ViewRequests');
Route::get('/user_profile', 'PagesController@user_profile');
Route::get('/services', 'PagesController@services');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/update', '\App\Http\Controllers\Auth\RegisterController@update');
Route::get('/edit/user/{id}','UsersController@edit');
Route::post('/edit/user/{id}','UsersController@update');
Route::get('/users', 'UsersController@index');
Route::resource('posts','PostsController');
Route::resource('/product/sendswappingrequest', '\App\Http\Controllers\SwappingRequestController');
Auth::routes();
//Route::get('/admin', function(){echo "Hello Admin";})->middleware('auth','admin');
Route::get('/admin', 'PagesController@admin');
Route::get('/customer', 'PagesController@index')->middleware('auth','customer');

Route::get ('admin/dashboard','PagesController@dashboard');

// Categories Route (Admin)
Route::match(['get','post'],'/admin/add-categories','CategoriesController@addCategories');
Route::get ('/admin/view-categories','CategoriesController@viewCategories');

// Products Route (Admin)
Route::match(['get','post'],'/admin/add-products','ProductsController@addProducts');
Route::get ('/admin/view-products','ProductsController@viewProducts');
Route::get('deleteproducts/{id}','ProductsController@deleteproducts');
Route::get('editproducts/{id}','ProductsController@editproducts');

// Users Route (Admin)
Route::get ('/admin/view-user','UsersController@viewUser');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('home');
// Password reset link request routes...
//Route::get('passwords/email', 'Auth\ResetPasswordController@getEmail');
//Route::post('passwords/email', 'Auth\ResetPasswordController@postEmail');
// Password reset routes...
//Route::get('passwords/reset/{token}', 'Auth\ResetPasswordController@getReset');
//Route::post('passwords/reset', 'Auth\ResetPasswordController@postReset');
<<<<<<< HEAD

Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');

Route::resource('product','ProductsController')->except([
    'show'
]);;
Route::get('product/{id}','ProductsController@product')->name('product');
Route::resource('category','CategoriesController');

//Product details display
