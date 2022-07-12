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
    public function index() {
        return view('index');
    }

    // public function addToCart($id){
    //     $product = DB::table('product')->where('id',$id)->first();
    //     Cart::add($id, $product->name, 1, $product->price);

    //     return redirect()->route('cart');
    // }

    // public function cart() {
    //     $cart = Cart::content();

    //     return view('fontend.cart',['cart'=>$cart]);
    // }
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
        return redirect()->route('index');
    } 
    // public function takeEmail($id)
    // {
    //     $data = DB::table('information_people')->where('id',$id)->first();
    //     Mail::to('avatar23599@gmail.com')->send(new TakeMail());
    //     return redirect()->route('index');
    // }
}
