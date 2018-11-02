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

Route::get('Lan', function(){
    echo "<h1> Hello world </h1>";
});

Route::get('HoTen/{ten}', function($ten){
    echo "Ten cua toi la: ".$ten;
});

Route::get('Ten/{ten?}', function($ten = 'Lan'){
    echo "Ten cua toi la: ".$ten;
});

Route::get('Myname/{name}', function($name){
    echo "My name is ". $name;
})-> where('name', '[a-zA-Z]+');

//View
Route::get('Lan', 'Controller@Lan');