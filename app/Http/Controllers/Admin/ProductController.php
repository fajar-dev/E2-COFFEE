<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $data['page'] = 'Product List';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['product'] = DB::table('product')->get();
        return view('admin/product',  compact('data'));
    }

    public function product_add(){
        $data['page'] = 'Add Product';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        return view('admin/product_add',  compact('data'));
    }

    public function product_submit(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        DB::table('product')->insert([
            'tittle' => $request->tittle,
            'slug' => preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->tittle))),
            'price' => $request->price,
            'description' => $request->desk,
            'photo' => $image_path,
        ]);
        return redirect()->route('product_list')->with('success','product has been added');
    }

    public function product_edit($id){
        $data['page'] = 'Edit Product';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['product'] = DB::table('product')->where('id', '=', $id)->first();
        return view('admin/product_edit',  compact('data'));
    }

    public function product_update(Request $request){
        if(empty($request->image)){
            DB::table('product')->where('id', $request->id)->update([
                'tittle' => $request->tittle,
                'slug' => preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->tittle))),
                'price' => $request->price,
                'description' => $request->desk,
            ]);
        }else{
             $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif'
            ]);
                $image_path = $request->file('image')->store('image', 'public');
                DB::table('product')->where('id', $request->id)->update([
                'tittle' => $request->tittle,
                'slug' => preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($request->tittle))),
                'price' => $request->price,
                'description' => $request->desk,
                'photo' => $image_path,
            ]);
        }
        return redirect()->route('product_list')->with('success','product has been saved');
    } 

    public function product_delete($id){
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect()->route('product_list')->with('success','product has been deleted');
    }
}
