<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $result = DB::table('categorys')->get(); //hien du lieu trong bang
        return view('admin.category.index' ,['categories' => $result]);
    }

    public function create(){
        $category = DB::table('categorys')->get();
        return view('admin.category.create', ['categories'=> $category]);
    }
    
    public function store (CategoryRequest $request){
        $data = $request->except('_token'); // lay du lieu duoc nhap
        $data['created_at'] = new \DateTime();
        DB::table('categorys')->insert($data); //lay du lieu duoc nhap dua vafo table
        
        return redirect()->route('admin.category.index')->with('success','Insert successfully'); //sau khi hoan thanh chuyeen den trang index
    }
    public function edit($id){
        $category = DB::table('categorys')->get();
        $edit = DB::table('categorys')->where('id', $id)->first();
        return view('admin.category.edit',['categorys'=>$category, 'edit'=>$edit]);
    }
    public function update (CategoryUpdateRequest $request, $id){
        $data = $request->except('_token');
        DB::table('categorys')->where('id','=',$id)->update($data);
        return redirect()->route('admin.category.index')->with('success','Edit successfully');
    }
    public function delete($id){
        DB::table('categorys')->where('id','=',$id)->delete();
        return redirect()->route('admin.category.index');
    }
}
