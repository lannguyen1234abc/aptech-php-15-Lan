<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index', ['phones' => $phones]);
    }

    public function show($id){
        //dd($id); // kiểm tra trạng thái của các biến
        $phone = Phone::find($id);
        return view('phones.show', ['phone'=> $phone]);
    }

    public function create(){
        return view('phones.create');
    }

    public function store(Request $request){

        Phone::create([
            'number' => $request -> number,
            'user_id' => $request -> user_id,
        ]);

        return redirect()->route('phones.index');
    }

    public function destroy($id){
        

        Phone::destroy($id);
        return redirect()->route('phones.index');
    }

    public function edit($id){
        $phone = Phone::find($id);
        return view('phones.edit', ['phone' => $phone]);
    }

    public function update(Request $request, $id){
        $phone = Phone::find($id);
       

        $phone -> update([
            'number' => $request -> number,
            'user_id' => $request -> user_id,
        ]);
        return redirect()->route('phones.show', $id);
    }
}
