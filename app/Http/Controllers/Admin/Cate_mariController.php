<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cate_mariController extends Controller
{
    public function index(){
        $result = DB::table('marine_creatures')->get(); //hien du lieu trong bang
        return view('admin.cate_mari.index' ,['marine_creatures' => $result]);
    }

    public function create(){
       $cate_mari = DB::table('marine_creatures')->get();
        return view('admin.cate_mari.create', ['marine_creatures'=>$cate_mari]);
    }
    
    public function store (Request $request){
        $data = $request->except('_token'); // lay du lieu duoc nhap
        $data['created_at'] = new \DateTime();
        DB::table('marine_creatures')->insert($data); //lay du lieu duoc nhap dua vafo table
        
        return redirect()->route('admin.cate_mari.index')->with('success','Insert successfully'); //sau khi hoan thanh chuyeen den trang index
    }
    public function edit($id){
        $cate_mari = DB::table('marine_creatures')->get();
        $edit = DB::table('marine_creatures')->where('id', $id)->first();
        return view('admin.cate_mari.edit',['marine_creatures'=>$cate_mari, 'edit'=>$edit]);
    }
    public function update (Request $request, $id){
        $data = $request->except('_token');
        DB::table('marine_creatures')->where('id','=',$id)->update($data);
        return redirect()->route('admin.cate_mari.index')->with('success','Edit successfully');
    }
    public function delete($id){
        DB::table('marine_creatures')->where('id','=',$id)->delete();
        return redirect()->route('admin.cate_mari.index');
    }
}
