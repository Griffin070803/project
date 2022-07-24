<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MariController extends Controller
{
    public function fish (){
        
        $data = DB::table('blogs')->where('marine_creatures_id','=',1)->get(); //hien du lieu trong bang
        return view('user.marine.fish' ,['blogs1' => $data]);
    }

    public function coral (){
        $result = DB::table('blogs')->where('marine_creatures_id','=',2)->get(); //hien du lieu trong bang
        return view('user.marine.coral' ,['blogs2' => $result]);
    }

    public function other (){
        $result = DB::table('blogs')->where('marine_creatures_id','=',3)->get(); //hien du lieu trong bang
        return view('user.marine.other' ,['blogs3' => $result]);
    }

    public function Information ($id){ 
        // $result = DB::table('blogs')->get();      
        $data=DB::table('blogs')->where('id', $id)->first();
        $comments = DB::table('comments')->where('blogs_id',$id)->get();
        return view('user.marine.Information', ['blogs'=> $data, 'id'=> $id, 'comments'=> $comments]);
    }
    public function post (Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $blogs_id = $data['blogs_id'];
        DB::table('comments')->insert($data);
        return redirect()->route('user.marine.Information',['id'=>$blogs_id]);        
    }

    

}