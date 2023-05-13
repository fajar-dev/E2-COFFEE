<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    
    public function index(){
        $data['page'] = 'About';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['about'] = DB::table('about')->where('id', 1)->first();
        return view('admin/about',  compact('data'));
    }

    public function about_update(Request $request){
        if(empty($request->image)){
            DB::table('about') ->where('id', 1)->update([
                'text' => $request->content
            ]);
        }else{
             $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif'
            ]);
            $image_path = $request->file('image')->store('image', 'public');
            DB::table('about') ->where('id', 1)->update([
                'text' => $request->content,
                'photo' => $image_path,
            ]);
        }
        return redirect()->route('about')->with('success','About have been updated');
    }

}
