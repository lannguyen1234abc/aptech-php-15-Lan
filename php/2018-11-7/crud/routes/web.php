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

// Xem tất cả data
Route::get('/users', 'UserController@index')->name('users.index');
 
// Form thêm người dùng. create này nếu link là /users/create thì đưa dòng này lên trước route show vì laravel tưởng create là id
Route::get('/users/create', 'UserController@create')->name('users.create');
 
// Thêm người dùng
Route::post('/users', 'UserController@store')->name('users.store');

// Xem chi tiết 1 người dùng
Route::get('/users/{id}', 'UserController@show')->name('users.show');

// Xóa người dùng
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

// Form sửa người dùng
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

// Cập nhật
Route::put('users/{id}', 'UserController@update')->name('users.update');

