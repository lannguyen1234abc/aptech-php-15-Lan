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


Route::get('/posts', 'CommentController@index')->name('posts.index');

Route::get('/posts/create', 'CommentController@create')->name('posts.create');
 
Route::post('/posts', 'CommentController@store')->name('posts.store');

Route::get('/posts/{id}', 'CommentController@show')->name('posts.show');

Route::delete('/posts/{id}', 'CommentController@destroy')->name('posts.destroy');

Route::get('/posts/{id}/edit', 'CommentController@edit')->name('posts.edit');

Route::put('/posts/{id}', 'CommentController@update')->name('posts.update');

