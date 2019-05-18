<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getAdminLogin(){
    	// $user = User::find(2);
     //    $user->password = bcrypt($user->password);
     //    $user->save();
        return view('admin/login');
    }
    public function postAdminLogin(Request $request){
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required'=>'Bạn chưa điền email',
                'password.required' => 'Bạn chưa điền password',
            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin');
        }
        else {
            return redirect('admin/login')->with('message','Đăng nhập không thành công');
        }
    }
    public function getAdminLogout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
