<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(){
        return view('app/home');
    }

    public function product($slug){
        return view('app/product');
    }
}
