<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        $data['page'] = 'Setting';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        return view('admin/setting',  compact('data'));
    }

    public function general_update(Request $request){
        if(empty($request->image)){
            DB::table('settings') ->where('id', 1)->update([
                'company' => $request->company,
                'motto' => $request->motto
            ]);
        }else{
             $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif'
            ]);
            $image_path = $request->file('image')->store('image', 'public');
            DB::table('settings') ->where('id', 1)->update([
                'company' => $request->company,
                'motto' => $request->motto,
                'logo' => $image_path,
                'pavicon' => $image_path,
            ]);
        }
        return redirect()->route('setting')->with('success','General setting have been updated');
    }

    public function seo_update(Request $request){
        if(empty($request->image)){
            DB::table('settings') ->where('id', 1)->update([
                'meta_tittle' => $request->tittle,
                'meta_description' => $request->desk,
                'meta_tags' => $request->tags
            ]);
        }else{
             $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif'
            ]);
            $image_path = $request->file('image')->store('image', 'public');
            DB::table('settings') ->where('id', 1)->update([
                'meta_tittle' => $request->tittle,
                'meta_description' => $request->desk,
                'meta_tags' => $request->tags,
                'meta_image' => $image_path,
            ]);
        }
        return redirect()->route('setting')->with('success','SEO setting have been updated');
    }
}
