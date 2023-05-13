<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    
    public function index(){
        $data['page'] = 'Gallery';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['gallery'] = DB::table('gallery')->get();
        return view('admin/gallery',  compact('data'));
    }

    public function gallery_add(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        DB::table('gallery')->insert([
            'tittle' => $request->tittle,
            'photo' => $image_path,
        ]);
        return redirect()->route('gallery')->with('success','photo have been added');
    }

    public function gallery_update(Request $request){
        DB::table('gallery')->where('id', '=', $request->id)->update([
            'tittle' => $request->tittle,
        ]);
        return redirect()->route('gallery')->with('success','photo have been added');
    }

    public function gallery_delete($id){
        DB::table('gallery')->where('id', '=', $id)->delete();
        return redirect()->route('gallery')->with('success','photo have been deleted');
    }

}
