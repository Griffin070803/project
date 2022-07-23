<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\DB;
class MarineController extends Controller
{
    public function index() {   
        $result = DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('admin.marine.index', ['blogs' => $result]);
    }
    public function create() {
        $category = DB::table('blogs')->get();
        return view('admin.marine.create', ['categories'=> $category]);
    }
    public function store(StoreRequest $request) {

        $data = $request->except('_token');
       
        $data['created_at'] = new \DateTime();

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;

        DB::table('blogs') ->insert($data);
        
        return redirect()->route('admin.marine.index')->with('success', 'insert successfuly');
    }
    

    public function edit($id) {
        $marine = DB::table('blogs')->where('id',$id)->first();

        return view('admin.marine.edit', ['id' => $id, 'marine' => $marine]);
    
    }
    public function update(UpdateRequest $request, $id) {
        $data = $request->except('_token', 'images');

        if (!empty($request->image)) {
            $data_old = DB::table('blogs')->where('id',$id)->first();
            $url_image_old_path = public_path('images/'.$data_old->image);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        DB::table('blogs')->where('id', '=', $id)->update($data);
    
        return redirect()->route('admin.marine.index')->with('success', 'Edit successfuly');
    }

    public function delete($id) {
        DB::table('blogs')->where('id', '=', $id)->delete();
        return redirect()->route('admin.marine.index');
    }
}
