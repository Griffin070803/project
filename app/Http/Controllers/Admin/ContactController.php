<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $result = DB::table('contacts')->get();
        return view('admin.contact.index', ['contacts'=> $result]);
    }
    public function delete($id){
        DB::table('category')->where('id','=',$id)->delete();
        return redirect()->route('admin.contact.index');
    }
}

