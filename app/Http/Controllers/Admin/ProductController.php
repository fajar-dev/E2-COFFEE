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

    public function product_delete($id){
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect()->route('product_list')->with('success','product has been deleted');
    }
}
