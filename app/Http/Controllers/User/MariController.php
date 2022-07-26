<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MariController extends Controller
{
    public function fish (){
        
        $data = DB::table('blogs')->where('marine_creatures_id','=',1)->paginate(9); //hien du lieu trong bang     
        if($search=request()->search) {
            $data = DB::table('blogs')->where('name', 'LIKE', '%' .$search. '%')->paginate(3);
        }
        return view('user.marine.fish' ,['blogs1' => $data]);
    }

    public function coral (){
        $data = DB::table('blogs')->where('marine_creatures_id','=',2)->paginate(9); //hien du lieu trong bang->paginate(8)
        if($search=request()->search) {
            $data = DB::table('blogs')->where('name', 'LIKE', '%' .$search. '%')->paginate(3);
        }
        return view('user.marine.coral' ,['blogs2' => $data]);
    }

    public function other (){
        $data = DB::table('blogs')->where('marine_creatures_id','=',3)->paginate(9); //hien du lieu trong bang->paginate(8)
        if($search=request()->search) {
            $data = DB::table('blogs')->where('name', 'LIKE', '%' .$search. '%')->paginate(3);
        }
        return view('user.marine.other' ,['blogs3' => $data]);
    }

    public function Information ($id){ 
        $blogs = DB::table('blogs')->get();      
        $data=DB::table('blogs')->where('id', $id)->first();
        $comments = DB::table('comments')->where('blogs_id',$id)->orderBy('created_at', 'DESC')->get();
        $sum_comment = DB::table('comments')->where('blogs_id',$id)->sum('status');
        $avg_rating = DB::table('comments')->where('blogs_id',$id)
        ->where('status' , '=', 1)
        ->sum('rating');
        $blogs_img = DB::table('blogs_images')->where('blogs_id', $id)->get();
        return view('user.marine.Information', ['blogs'=> $data, 'id'=> $id, 'comments'=> $comments, 'blog'=>$blogs, 'blogs_img'=>$blogs_img, 'sum'=> $sum_comment, 'avg'=>$avg_rating]);
    }
    public function post (Request $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $blogs_id = $data['blogs_id'];
        DB::table('comments')->insert($data);
        return redirect()->route('user.marine.Information',['id'=>$blogs_id]);        
    }
}