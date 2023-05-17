<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        return view('auth/login',  compact('data'));
    }

    public function login_action(Request $request ){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('error','Username or password is incorrect !!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
