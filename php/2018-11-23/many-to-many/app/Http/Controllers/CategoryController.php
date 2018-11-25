<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::with('posts')->get();
        return view('cate.index', ['categories'=>$categories]);
    }
}
