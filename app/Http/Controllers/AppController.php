<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function home(){
        $data['web'] = DB::table('settings')->where('id', 1)->first(); 
        $data['contact'] = DB::table('contact')->where('id', 1)->first();
        $data['about'] = DB::table('about')->where('id', 1)->first();
        $data['product'] = DB::table('product')->get();
        $data['gallery'] = DB::table('gallery')->get();
        return view('app/home', compact('data'));
    }

    public function inbox(Request $request){
        DB::table('inbox')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect()->route('home')->with('success','Message successfully sent');
    }

    public function product($slug){
        $data['web'] = DB::table('settings')->where('id', 1)->first(); 
        $data['contact'] = DB::table('contact')->where('id', 1)->first();
        $data['about'] = DB::table('about')->where('id', 1)->first();
        $data['product'] = DB::table('product')->where('slug', $slug)->first();
        return view('app/product', compact('data'));
    }
}
