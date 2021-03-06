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

Route::get('/index','PostController@index');

Route::get('/cate','CategoryController@index');

Route::get('/xem', function(){
    $data = App\Post::find(1)->get()->toJson();
    return $data;
});
Route::get('/index','PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
 
Route::post('/posts', 'PostController@store')->name('posts.store');