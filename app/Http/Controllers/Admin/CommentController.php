<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index(){
        $result = DB::table('comments')->get();
        return view('admin.comment.index', ['comments'=> $result]);
    }
    public function delete($id){
        DB::table('comments')->where('id','=',$id)->delete();
        return redirect()->route('admin.comment.index');
    }

    public function unactive($id){
        DB::table('comments')->where('id','=',$id)->update(['status' => 1]);
        return redirect()->route('admin.comment.index');
    }
    public function active($id)
    {
        DB::table('comments')->where('id','=',$id)->update(['status' => 0]);
        return redirect()->route('admin.comment.index');
    }
}
