<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    
    public function store (Request $request){
        $data = $request->except('_token'); // lay du lieu duoc nhap
        $data['created_at'] = new \DateTime();
        DB::table('categorys')->insert($data); //lay du lieu duoc nhap dua vafo table
        
        return redirect()->route('admin.category.index'); //sau khi hoan thanh chuyeen den trang index
    }
    // public function edit($id){
    //     $category = DB::table('category')->where('id', $id)->first();
    //     return view('admin.category.edit',['id'=>$id, 'categories'=>$category])->with('Success','Edit successfully');
    // }
    // public function update (Request $request, $id){
    //     $data = $request->except('_token');
    //     DB::table('category')->where('id','=',$id)->update($data);
    //     return redirect()->route('admin.category.index');
    // }
    public function delete($id){
        DB::table('categorys')->where('id','=',$id)->delete();
        return redirect()->route('admin.category.index');
    }
}
