<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class PageController extends Controller
{
    public function home(){
        $slide = Slide::all()->get();
        return view('page.trangchu', ['slide'=>$slide]); //sử dụng mảng slide trỏ tới biến truyền vào là slide;
    }
    public function product(){
        return view('page.sanpham');
    }
    public function introduce(){
        return view('page.gioithieu');
    }
    public function contact(){
        return view('page.lienhe');
    }
}
