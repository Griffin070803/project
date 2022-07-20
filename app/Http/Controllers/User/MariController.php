<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MariController extends Controller
{
    public function fish (){
        $result = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.fish' ,['blogs' => $result]);
    }

    public function coral (){
        $result = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.coral' ,['blogs' => $result]);
    }

    public function other (){
        $result = DB::table('blogs')->get(); //hien du lieu trong bang
        return view('user.marine.other' ,['blogs' => $result]);
    }
    public function Information (){
        $blogs=DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('user.marine.Information', ['blogs'=> $blogs]);
    }

}
