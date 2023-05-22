<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $data['page'] = 'Profile';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        return view('admin/profile',  compact('data'));
    }

    public function account_update(Request $request){
        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('profile')->with('success','profile has been updated successfully');
    }

    public function password_update(Request $request){
        if(!Hash::check($request->old, auth()->user()->password) ){
            return redirect()->route('profile')->with('error',"Old Password Doesn't match!");
        }else{
            if($request->pw != $request->pw2){
                return redirect()->route('profile')->with('error',"Repeat Password Doesn't match!");
            }else{
                DB::table('users')->where('id', Auth::user()->id)->update([
                    'password' => Hash::make($request->pw)
                ]);
                return redirect()->route('logout');
            }
        }
    }
}
