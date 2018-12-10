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

Route::get('/trangchu', 'PageController@home')->name('trangchu');
Route::get('/sanpham', 'PageController@product')->name('sanpham');
Route::get('/loaisanpham/{type}', 'PageController@producttype')->name('loaisanpham');
Route::get('/lienhe', 'PageController@contact')->name('lienhe');
Route::get('/gioithieu', 'PageController@introduce')->name('gioithieu');
Route::get('/dangki', 'PageController@dangki')->name('dangki');
Route::get('/dangnhap', 'PageController@dangnhap')->name('dangnhap');
Route::get('/search', 'PageController@search')->name('search');
