<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Slide;
use App\Product;
use App\User;
use Hash;

class PageController extends Controller
{
    public function home(){
        $slides = Slide::all();
        $type_home = ProductType::all(); //loại sản phẩm
        $new_products = Product::all();
        
        return view('customer.page.trangchu',compact('slides','type_home', 'new_products'));

        //return view('page.trangchu',['producttypes'=>$producttypes], ['slides'=>$slides]); 
        
        //sử dụng mảng slide trỏ tới biến truyền vào là slide;
    }
    
    public function product(){
        $type_product = ProductType::all();
        $products = Product::paginate(6);
        
        return view('customer.page.sanpham', compact('type_product', 'products'));
    }
    public function producttype($type){
        $types = ProductType::all(); //loại sản phẩm

        $product_type = Product::where('producttype_id', $type)->paginate(6);
        return view('customer.page.loaisanpham', compact('types','product_type'));
    }
    public function introduce(){
        return view('customer.page.gioithieu');
    }
    public function contact(){
        return view('customer.page.lienhe');
    }
    public function dangki(){
        return view('customer.page.dangki');
    }
    public function dangnhap(){
        return view('customer.page.dangnhap');
    }
    public function search(Request $re){
        $product = Product::where('name', 'like', '%'.$re->search.'%')
                            ->orwhere('price', $re->search)->get();
        return view('customer.page.search', compact('product'));
    }

    public function chitiet(Request $re){
        $product = Product::where('id', $re->id)->first();
        
        return view('customer.page.chitietsanpham', compact('product'));
    }

    public function gethome(){
        return view('admin.home');
    }
    public function postSign(Request $rq){
        $this->validate($rq,
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'phone_number'=>'required',
                'address'=>'required',
                'password'=>'required|min:5|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email này đã có người sử dụng',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>'Password ít nhất 5 kí tự',
                'password.max'=>'Password tối đa 20 kí tự',
                're_password.same'=>'Password không giống nhau'
            ]
            );
            $user = new User();
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->phone_number = $rq->phone_number;
            $user->address = $rq->address;
            $user->password = Hash::make('$rq->password');
            $user->save();
            return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }
    
}
