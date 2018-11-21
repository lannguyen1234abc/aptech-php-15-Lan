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
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');


Route::get('/postcomment', 'PostCommentController@index')->name('postcomment.index');
Route::get('/postcomment/create', 'PostCommentController@create')->name('postcomment.create');
Route::post('/postcomment', 'PostCommentController@store')->name('postcomment.store');
Route::get('/postcomment/{id}', 'PostCommentController@show')->name('postcomment.show');
Route::delete('/postcomment/{id}', 'PostCommentController@destroy')->name('postcomment.destroy');
Route::get('/postcomment/{id}/edit', 'PostCommentController@edit')->name('postcomment.edit');
Route::put('/postcomment/{id}', 'PostCommentController@update')->name('postcomment.update');