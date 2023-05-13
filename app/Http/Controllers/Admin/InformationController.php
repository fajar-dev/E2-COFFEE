<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index(){
        $data['page'] = 'Information';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['contact'] = DB::table('contact')->where('id', 1)->first();
        return view('admin/information',  compact('data'));
    }

    public function contact_update(Request $request){
        DB::table('contact') ->where('id', 1)->update([
            'email' => $request->email,
            'address' => $request->address,
            'second_address' => $request->second_address,
            'whatsapp' => $request->wa,
        ]);
        return redirect()->route('information')->with('success','contact have been updated');
    }

    public function sosmed_update(Request $request){
        DB::table('contact') ->where('id', 1)->update([
            'facebook' => $request->fb,
            'instagram' => $request->ig,
            'linkedin' => $request->in,
        ]);
        return redirect()->route('information')->with('success','contact have been updated');
    }
}
