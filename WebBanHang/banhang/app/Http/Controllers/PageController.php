<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Slide;
use App\Product;

class PageController extends Controller
{
    public function home(){
        $slides = Slide::all();
        $producttypes = ProductType::all();
        $new_products = Product::all();
        return view('page.trangchu',compact('slides','producttypes', 'new_products'));
        //return view('page.trangchu',['producttypes'=>$producttypes], ['slides'=>$slides]); 
        
        //sử dụng mảng slide trỏ tới biến truyền vào là slide;
        
        //return view('page.trangchu',compact('slides','producttypes'));
    }
    
    public function product(){
        $producttypes = ProductType::all();
        return view('page.sanpham',['producttypes'=>$producttypes]);
    }
    public function introduce(){
        return view('page.gioithieu');
    }
    public function contact(){
        return view('page.lienhe');
    }
    public function dangki(){
        return view('page.dangki');
    }
    public function dangnhap(){
        return view('page.dangnhap');
    }
    
}
