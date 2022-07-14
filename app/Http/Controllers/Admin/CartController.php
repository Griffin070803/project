<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use Cart;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\NotifyMail;

class CartController extends Controller
{
    public function index($id) {
        $datas = DB::table('events')->where('id',$id)->first();
        return view('index',['datas'=>$datas]); 
    }

    public function addToCart($id){
        $product = DB::table('events')->where('id',$id)->first();
        return redirect()->route('index',['id'=>$product->id]);
    }
    public function storeCart(Request $request) {
        $data=$request->except('_token');
        $data['created_at'] = new \DateTime();
        $email = $data['email'];
        DB::table('information_people')->insert($data);
        $email_id = DB::table('information_people')->where('email','LIKE','%'.$email.'%')->first();
        return redirect()->route('sendEmail',['id'=>$email_id->id]);
    }
    public function sendEmail($id)
    {
        $email = DB::table('information_people')->where('id',$id)->first();
        Mail::to($email->email)->send(new NotifyMail());
        return redirect()->route('index',['id' => $id]);
    }
    public function getRegister() {
        $data = DB::table('information_people')->get();
        return view('admin.register.index',['data'=>$data]);

    }
    public function edit($id){
        $product = DB::table(('information_people'))->where('id',$id)->first();
        return view('admin.register.edit',['product'=>$product]);
    }
    public function updateEdit(Request $request,$id){
        $data = $request->except('_token');
        DB::table('information_people')->where('id','=',$id)->update($data);
        return redirect()->route('getRegister')->with('success','Edit Successfully');
    }
    public function delete($id){
        DB::table('information_people')->where('id',$id)->delete();
        return redirect()->route('getRegister')->with('success','Delete Successfully');
    }
}
