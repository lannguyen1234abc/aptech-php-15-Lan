<?php
use App\User;
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

/*Route::resource('users','UserController');*/

/*Route::get('/users', function(){
    $users = User::all();
    //dd($users);
    return view('index', ['users' => $users]);
});*/

/*Route::get('/users', function(){
    $users = User::all()->toArray();
    //echo $users;
    var_dump($users);
    //return view('index', ['users' => $users]);
});*/
/*Route::get('/users', function(){
    $users = User::where('id', 1)->get();
    echo $users[0]['name'];
});*/

// Show tất cả dữ liệu người dùng theo bảng
Route::get('index', 'UserController@index');
// Xem 1 nguoi dung
Route::get('show/{id}', 'UserController@show');
// Them nguoi dung
Route::get('store', 'UserController@store');
// Delete nguoi dung
Route::get('destroy/{id}', 'UserController@destroy');
// Update nguoi dung
Route::get('update/{id}', 'UserController@update');