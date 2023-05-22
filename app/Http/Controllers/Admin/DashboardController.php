<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $data['page'] = 'Dashboard';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['inbox'] = DB::table('inbox')->limit(3)->get();
        $data['product'] = DB::table('product')->count();
        $data['gallery'] = DB::table('gallery')->count();
        return view('admin/dashboard',  compact('data'));
    }
}
