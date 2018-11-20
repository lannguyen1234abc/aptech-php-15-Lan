<?php

namespace App\Http\Controllers;

use App\User;
use App\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::with('phone')->get();
        return view('users.index', ['users'=> $users]);
    }

    public function show(User $id){
        //dd($id); // kiểm tra trạng thái của các biến
        $user = User::with('phone')->find($id->id);
        return view('users.show', ['user'=> $user]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $user = User::create(['name' => $request -> name])->phone()->create(['number' => $request -> number]);
        //$users = User::with('phone')->find($user->user_id);

        return redirect()->route('users.index');
    }

    public function destroy(User $id){
        /*$user = User::find($id);
        $user->delete();*/

        Phone::where('user_id', $id->id)->delete();
        User::destroy($id->id);
        return redirect()->route('users.index');
    }

    public function edit(User $id){
        $user = User::with('phone')->find($id->id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $id){
        $user = User::with('phone')->find($id->id);

        $user->update([
            'name' => $request->name
        ]);
        $user->phone()->update([
            'number' => $request->number
        ]);
    
        return redirect()->route('users.show', $id);
    }
}
