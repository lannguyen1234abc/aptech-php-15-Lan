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
        $type_home = ProductType::all(); //loại sản phẩm
        $new_products = Product::all();
        return view('page.trangchu',compact('slides','type_home', 'new_products'));

        //return view('page.trangchu',['producttypes'=>$producttypes], ['slides'=>$slides]); 
        
        //sử dụng mảng slide trỏ tới biến truyền vào là slide;
    }
    
    public function product(){
        $type_product = ProductType::all();
        $products = Product::all();

        return view('page.sanpham', compact('type_product', 'products'));
    }
    public function producttype($type){
        $types = ProductType::all(); //loại sản phẩm

        $product_type = Product::where('producttype_id', $type)->get();
        return view('page.loaisanpham', compact('types','product_type'));
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
