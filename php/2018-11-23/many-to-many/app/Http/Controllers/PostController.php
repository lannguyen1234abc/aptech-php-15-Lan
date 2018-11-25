<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('categories')->get();
        return view('posts.index', ['posts'=>$posts]);
    }
}
