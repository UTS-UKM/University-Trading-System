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



Route::resource('posts','PostsController');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product','ProductsController');
Route::resource('category','CategoriesController');
