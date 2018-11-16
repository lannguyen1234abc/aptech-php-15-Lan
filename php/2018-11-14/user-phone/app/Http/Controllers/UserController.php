<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users'=> $users]);
    }

    public function show($id){
        //dd($id); // kiểm tra trạng thái của các biến
        $user = User::find($id);
        return view('users.show', ['user'=> $user]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        User::create([
            'name' => $request -> name,
            
        ]);

        return redirect()->route('users.index');
    }

    public function destroy($id){
        /*$user = User::find($id);
        $user->delete();*/

        User::destroy($id);
        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
       

        $user -> update([
            'name' => $request -> name,
           
        ]);
        return redirect()->route('users.show', $id);
    }
}
