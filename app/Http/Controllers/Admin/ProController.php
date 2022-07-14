<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProController extends Controller
{
    public function index() {   
        $result = DB::table('blogs')->orderBy('created_at', 'DESC')->get();
        return view('admin.lte.index', ['blogs' => $result]);
    }
    public function create() {
        return view('admin.lte.create');
    }
    public function store(Request $request) {

        $data = $request->except('_token');
       
        $data['created_at'] = new \DateTime();

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;

        DB::table('blogs') ->insert($data);
        
        return redirect()->route('admin.lte.index')->with('success', 'insert successfuly');
    }
    

    public function edit($id) {
        $lte = DB::table('blogs')->where('id',$id)->first();

        return view('admin.lte.edit', ['id' => $id, 'lte' => $lte]);
    
    }
    public function update(Request $request, $id) {
        $data = $request->except('_token', 'images');

        if (!empty($request->images)) {
            $data_old = DB::table('blogs')->where('id',$id)->first();
            $url_image_old_path = public_path('images/'.$data_old->images);
            if (file_exists($url_image_old_path)) {
                unlink($url_image_old_path);
            }
            $imageName = time().'.'.$request->images->extension();  
            $request->images->move(public_path('images'), $imageName);
            $data['images'] = $imageName;
        }
        DB::table('blogs')->where('id', '=', $id)->update($data);
    
        return redirect()->route('admin.lte.index')->with('success', 'Edit successfuly');
    }

    public function delete($id) {
        DB::table('blogs')->where('id', '=', $id)->delete();
        return redirect()->route('admin.lte.index');
    }
}