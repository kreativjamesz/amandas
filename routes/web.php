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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('admin/', 'HomeController@index')->name('home');
Route::group(array('prefix'=>'admin', 'namespace'=>'Admin'), function(){
	Route::resource('/products','ProductController');
	Route::get('/products/category','ProductController@category')->name('product.category');
	Route::resource('/users','UserController');
	Route::resource('/roles','RoleController');
	Route::resource('/permissions','PermissionController');
});
// Cart
Route::get('/cart', 'CartController@index')->name('cart');