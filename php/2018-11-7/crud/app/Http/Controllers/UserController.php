<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('users.index', ['users'=> $users]);
    }

    function show($id){
        $user = User::find($id);
        return view('users.show', ['user'=> $user]);
    }

    function create(){
        return view('users.create');
    }

    function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');
    }

    function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    function edit($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index');
    }
}
