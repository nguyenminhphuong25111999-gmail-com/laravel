<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginAdminController extends Controller
{
    //
    public function getLoginAdmin(){
    	return view('backend.login');
    }

    public function postLoginAdmin(Request $request){
    	$arr = ['email' => $request->email, 'password' => $request->password];
        if($request->remember = 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }
    	if(Auth::attempt($arr, $remember)){
    		return redirect()->intended('admin/home');
    	}else{
    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
    	}
    }
}
