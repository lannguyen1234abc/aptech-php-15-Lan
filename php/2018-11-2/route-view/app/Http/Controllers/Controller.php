<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        //return view('Lan');
        /*$users = DB::table('users')->get();
        return $users;*/

        /*$users = DB::table('users')->select('id','name')->get();
        return $users;*/

        $users = DB::table('users')-> get();
        return view('welcome', ['users' => $users]);
    }
}
