<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MariController extends Controller
{
    public function fish (){
        $data = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.fish' ,['blogs' => $data]);
    }

    public function coral (){
        $result = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.coral' ,['blogs' => $result]);
    }

    public function other (){
        $result = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.other' ,['blogs' => $result]);
    }

    public function Information ($id){ 
        // $result = DB::table('blogs')->get();      
        $data=DB::table('blogs')->where('id', $id)->first();
        return view('user.marine.Information', ['blogs'=> $data, 'id'=> $id]);
    }
    

}