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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index')->name('category');

Route::get('/product', 'ProductController@index')->name('product');

Route::get('/product/{id}', 'ProductController@show')->name('products');

Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('addToCart');

Route::get('/order', 'ProductController@getCart')->name('order')->middleware('auth');

Route::get('/delete-order/{id}', 'ProductController@deleteItem')->name('deleteItem');

Route::get('/changeQuantity/{id}/{value}/{price}', 'ProductController@changeQuantity')->name('changeQuantity');

Route::post('/order/save', 'OrdersController@store')->name('orderAdd');

Route::get('/order/view', 'OrdersController@show')->name('orderView')->middleware('auth');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/update/{id}', 'AdminController@update')->name('adminUpdate')->middleware('auth');

Route::get('/admin/delete/{id}', 'AdminController@destroy')->name('adminDestroy')->middleware('auth');

Route::get('/sales', 'SalesController@index')->name('sales')->middleware('auth');

