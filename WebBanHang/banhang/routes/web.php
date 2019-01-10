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
/*Route::get('/dulieu', function(){
    return view("data.giaodien");
});*/

Route::get('/giohang', function(){
    return view("customer.page.cart");
});


/// Customer
Route::get('/trangchu', 'PageController@home')->name('trangchu');
Route::get('/sanpham', 'PageController@product')->name('sanpham');
Route::get('/loaisanpham/{type}', 'PageController@producttype')->name('loaisanpham');
Route::get('/lienhe', 'PageController@contact')->name('lienhe');
Route::get('/gioithieu', 'PageController@introduce')->name('gioithieu');

Route::get('/search', 'PageController@search')->name('search');
Route::get('/chitietsanpham/{id}', 'PageController@chitiet')->name('chitietsanpham');

Route::get('/dangki', 'UserController@dangki')->name('dangki');
Route::post('/postDangki', 'UserController@postDangki')->name('postDangki');
Route::get('/dangnhap', 'UserController@dangnhap')->name('dangnhap');
Route::post('/postDangnhap', 'UserController@postDangnhap')->name('postDangnhap');
Route::get('/dangxuat', 'UserController@dangxuat')->name('dangxuat');

//Giỏ hàng
Route::get('/giohang/{customer_id}', 'CartController@show')->name('giohang');

///Admin
Route::get('/login/admin', 'UserController@adminLogin')->name('adminLogin');
Route::post('/postAdminlogin', 'UserController@postAdminlogin')->name('postAdminlogin');
Route::get('/admin', 'PageController@getadmin')->name('admin');

///Loại sản phẩm
Route::get('/producttype', 'ProductTypeController@index')->name('producttype.index');
Route::get('/producttype/create', 'ProductTypeController@create')->name('producttype.create');
Route::post('/producttype', 'ProductTypeController@store')->name('producttype.store');
Route::get('/producttype/{id}', 'ProductTypeController@show')->name('producttype.show');
Route::delete('/producttype/{id}', 'ProductTypeController@destroy')->name('producttype.destroy');
Route::get('/producttype/{id}/edit', 'ProductTypeController@edit')->name('producttype.edit');
Route::put('producttype/{id}', 'ProductTypeController@update')->name('producttype.update');

/// Users
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{id}', 'UserController@update')->name('users.update');

///Product
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{id}', 'ProductController@update')->name('products.update');