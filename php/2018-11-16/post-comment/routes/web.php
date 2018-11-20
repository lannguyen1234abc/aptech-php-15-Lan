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


Route::get('/comments', 'CommentController@index')->name('comments.index');
Route::get('/comments/create', 'CommentController@create')->name('comments.create'); 
Route::post('/comments', 'CommentController@store')->name('comments.store');
Route::get('/comments/{id}', 'CommentController@show')->name('comments.show');
Route::delete('/comments/{id}', 'CommentController@destroy')->name('comments.destroy');
Route::get('/comments/{id}/edit', 'CommentController@edit')->name('comments.edit');
Route::put('/comments/{id}', 'CommentController@update')->name('comments.update');


Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{p_id}', 'PostController@show')->name('posts.show');
Route::delete('/posts/{p_id}', 'PostController@destroy')->name('posts.destroy');
Route::get('/posts/{p_id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{p_id}', 'PostController@update')->name('posts.update');