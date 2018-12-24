<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', ['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone_number' => $request ->phone_number,
            'password' => $request ->password,
            'remember_token' => $request ->remember_token,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', ['user'=> $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user -> update([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone_number' => $request ->phone_number,
            'password' => $request ->password,
            'remember_token' => $request ->remember_token,
        ]);
        return redirect()->route('users.show', $id);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }

    public function dangki(){
        return view('dangki');
    }

    public function dangnhap(){
        return view('dangnhap');
    }

    public function dangxuat(){
        Auth::logout();
        return redirect()->route('trangchu');
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
            
            //$password = bcrypt($rq->password);
            $user->password = bcrypt($rq->password);
            $user->save();
            return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email'=> 'required|email',
                'password'=> 'required|min:5|max:20'
            ],
            [
                'email.required'=> 'Vui lòng nhập email',
                'email.email'=> 'Email không đúng định dạng',
                'password.required'=> 'Vui lòng nhập mật khẩu'
            ]           
            );
            $email = $request->email;
            $password = $request->password;
            //dd(bcrypt($password));
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
    
                return redirect()->route('trangchu');
            }
            else{
                return redirect()->back()->with('thongbao', 'Đăng nhập không thành công');
            }
    }
}
