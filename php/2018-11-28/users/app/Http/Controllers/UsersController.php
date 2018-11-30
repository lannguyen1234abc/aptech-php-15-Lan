<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users'=>$users]);
    }

    public function show($id){
        $user = User::find($id);
        return view('users.show', ['user'=>$user]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        User::create([
            'name' => $request ->name,
            'address' => $request ->address,
        ]);

        return redirect()->route('users.index');
    }
}
