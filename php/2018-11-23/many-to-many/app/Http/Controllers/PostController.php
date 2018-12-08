<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('categories')->get();
        return view('posts.index', ['posts'=>$posts]);
    }
    public function create(){
        $categories = Category::all();
        return view('posts.create', ['categories'=>$categories]);
    }

    public function store(Request $request){

        $post = Post::create(['title' => $request -> title, 'description' => $request -> description, 'content' => $request -> content]);
        
        $post->categories()->attach($request->category);
       // return $request->all();
        
    }

}
