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
        $cate_mari = DB::table('marine_creatures')->get();       
        return view('admin.lte.create', ['marine_creatures' => $cate_mari]);
    }
    public function store(Request $request) {

        $data_product = $request -> except('_token', 'avatar');
        $data_product['created_at'] = new \DateTime();
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data_product['image'] = $imageName;

        $product_id = DB::table('blogs')->insertGetId($data_product);

        //upload image
        $data_images = $request->only('blogs_id','avatar');
        if ($request->has('avatar')){
            foreach($request->file('avatar') as $image){
                $imageName = time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                $data_images['avatar'] = $imageName;
                $data_images['blogs_id'] = $product_id;
            DB::table('blogs_images')->insert($data_images);
            }
        }      
        //=====================================

        // $data = $request->except('_token');      
        
        // DB::table('blogs') ->insert($data);      
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
        DB::table('blogs_images')->where('blogs_id', '=', $id)->delete();
        DB::table('comments')->where('blogs_id', '=', $id)->delete();
        return redirect()->route('admin.lte.index');
    }

    public function unactive($id){
        DB::table('blogs')->where('id','=',$id)->update(['status' => 1]);
        return redirect()->route('admin.lte.index');
    }
    public function active($id)
    {
        DB::table('blogs')->where('id','=',$id)->update(['status' => 0]);
        return redirect()->route('admin.lte.index');
    }

}