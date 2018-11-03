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

Route::get('/Lan', function(){
    return view('Lan');
});

/*Route::get('/index', function(){
    $users = DB::table('users')->get();
    return view('welcome', ['users' => $users]);
});*/

Route::get('/index', 'Controller@index');