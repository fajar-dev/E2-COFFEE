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
        return view('admin/dashboard',  compact('data'));
    }
}
