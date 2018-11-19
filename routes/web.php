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
Route::get('/user_profile', 'PagesController@user_profile');
Route::get('/services', 'PagesController@services');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/update', '\App\Http\Controllers\Auth\RegisterController@update');
Route::get('/edit/user/{id}','UsersController@edit');
Route::post('/edit/user/{id}','UsersController@update');
Route::get('/users', 'UsersController@index');


Route::resource('posts','PostsController');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');
