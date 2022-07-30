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
        $sum_adult = DB::table('information_people')->where('events_id',$id)->sum('adult');
        $sum_children = DB::table('information_people')->where('events_id',$id)->sum('children');
        return view('index',['datas'=>$datas,'sum_children'=>$sum_children,'sum_adult'=>$sum_adult]); 
    }

    public function addToCart($id){
        $product = DB::table('events')->where('id',$id)->first();
        return redirect()->route('index',['id'=>$product->id]);
    }
    public function addStoreCart(CartRequest $request) {
        $data=$request->except('_token');
        $data['created_at'] = new \DateTime();
        $email = $data['email'];
        $id_event = $data['events_id'];
        // dd($data);
        Mail::send('emails.demoMail', $data, function($email) use($request){
            $email->subject('Jenkinson Sea Life | Feedback');
            $email->to($request->email);
        });
        $data_infor= $request->except('_token','name_events','timeend','timestart');
        DB::table('information_people')->insert($data_infor);
        $email_id = DB::table('information_people')
        ->where('email','LIKE','%'.$email.'%')
        ->where('events_id',$id_event)
        ->first();
        
        return redirect()->route('infor',['id'=>$id_event])->with('success','Please Check Your Mail');
    }

    // public function sendEmail($id)
    // {
    //     $event = DB::table('events')->where('id',$id)->first();
    //     return redirect()->route('infor',['id' =>$email->events_id]);
    // }
    public function getRegister() {
        $data = DB::table('information_people')
        ->join('events','information_people.events_id','=','events.id')
        ->select('information_people.*','events.name as CName')
        ->get();

        return view('admin.register.index',['data'=>$data]);

    }
    public function edit($id){
        $product = DB::table('information_people')->where('id',$id)->first();
        $event = DB::table('events')->where('id',$product->events_id)->first();
        $sum_adult = DB::table('information_people')->where('events_id',$event->id)->sum('adult');
        $sum_children = DB::table('information_people')->where('events_id',$event->id)->sum('children');
        return view('admin.register.edit',['product'=>$product,'sum_children'=>$sum_children,'sum_adult'=>$sum_adult],['event'=>$event]);
    }
    public function updateEdit(CartRequest $request,$id){
        $data = $request->except('_token');
        DB::table('information_people')->where('id','=',$id)->update($data);
        return redirect()->route('getRegister')->with('success','Edit Successfully');
}
    public function delete($id){
        DB::table('information_people')->where('id',$id)->delete();
        return redirect()->route('getRegister')->with('success','Delete Successfully');
        
    }
   
}
