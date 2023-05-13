<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InboxController extends Controller
{
    public function index(){
        $data['page'] = 'Inbox';
        $data['web'] = DB::table('settings')->where('id', 1)->first();
        $data['inbox'] = DB::table('inbox')->get();
        return view('admin/inbox',  compact('data'));
    }
    public function inbox_delete($id){
        DB::table('inbox')->where('id', '=', $id)->delete();
        return redirect()->route('inbox')->with('success','Inbox have been deleted');
    }
}
