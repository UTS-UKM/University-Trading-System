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
Route::get('/home', 'HomeController@index')->name('home');


// Categories Route (Admin)
Route::match(['get','post'],'/admin/add-categories','CategoriesController@addCategories');
Route::get ('/admin/view-categories','CategoriesController@viewCategories');
Route::get('deleteCategories/{id}','CategoriesController@deleteCategories');
Route::get('/admin/edit-categories','CategoriesController@editCategories');

// Users Route (Admin)
Route::get ('/admin/view-users','UsersController@viewUsers');
Route::get('deleteusers/{id}','UsersController@deleteusers');

// Products Route (Admin)
Route::get ('/admin/view-products','ProductsController@viewProducts');
Route::get('/admin/edit-products','ProductsController@editProducts');
Route::get('deleteproducts/{id}','ProductsController@deleteproducts');


Route::get('/category1','ProductsController@category1');
Route::get('/category2','ProductsController@category2');
Route::get('/category3','ProductsController@category3');
Route::get('/category4','ProductsController@category4');
Route::get('/category5','ProductsController@category5');
Route::get('/category6','ProductsController@category6');
Route::get('/category7','ProductsController@category7');
Route::get('/category8','ProductsController@category8');
Route::get('/category9','ProductsController@category9');
Route::get('/category10','ProductsController@category10');
Route::get('/category11','ProductsController@category11');
Route::get('/category12','ProductsController@category12');



Route::get('/about', 'PagesController@about');
Route::get('/user/ViewRequests', 'SwappingRequestController@index');
Route::get('/user/ViewProducts', 'ProductsController@userViewProducts');

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

//Route::get('/admin', 'AdminController@index')->name('home');
// Password reset link request routes...
//Route::get('passwords/email', 'Auth\ResetPasswordController@getEmail');
//Route::post('passwords/email', 'Auth\ResetPasswordController@postEmail');
// Password reset routes...
//Route::get('passwords/reset/{token}', 'Auth\ResetPasswordController@getReset');
//Route::post('passwords/reset', 'Auth\ResetPasswordController@postReset');
/*
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');
*/
Route::resource('product','ProductsController')->except([
    'show'
]);;

Route::get('/user/swappingRequest/approve/{id}', 'SwappingRequestController@approve');
Route::get('/user/swappingRequest/reject/{id}', 'SwappingRequestController@reject');
Route::get('/admin/view-swapping-requests', 'SwappingRequestController@admin_swapping_request');
Route::get('/admin/swappingRequest/approve/{id}', 'SwappingRequestController@adminApprove');
Route::get('/admin/swappingRequest/reject/{id}', 'SwappingRequestController@adminReject');

Route::get('/product/{id}','ProductsController@product')->name('product');
Route::resource('category','CategoriesController');

Route::get('/user/swappingRequest/approve/{id}', 'SwappingRequestController@approve');
Route::get('/user/swappingRequest/reject/{id}', 'SwappingRequestController@reject');
Route::get('/admin/view-swapping-requests', 'SwappingRequestController@admin_swapping_request');
Route::get('/admin/swappingRequest/approve/{id}', 'SwappingRequestController@adminApprove');
Route::get('/admin/swappingRequest/reject/{id}', 'SwappingRequestController@adminReject');

Route::get('/user/ViewProducts/ViewProductsStats/{id}', 'ProductsController@viewProductStats');

Route::get('/product/{id}','ProductsController@product')->name('product');
Route::resource('category','CategoriesController');
//Product details display



// Favorite

Route::get('/favourite/addToFavourite/{product_id}', 'FavouriteController@store');
Route::get('/favourite/RemoveFromFav/{favourite_id}', 'FavouriteController@delete');
Route::get('/user/ViewFav/{id}', 'FavouriteController@index');
/*
Route::get('/products/favourites', 'ProductsController@index')->name('product.fav');
Route::get('/products/{product}', 'ProductsController@show')->name('product.show');
Route::post('/products/{product}/favourites', 'ProductsController@store')->name('product.fav.store');	
Route::delete('/products/{product}/favourites', 'ProductsController@destroy')->name('product.fav.destroy');
*/
