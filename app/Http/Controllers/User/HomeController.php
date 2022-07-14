<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Contact\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SentMail;

class HomeController extends Controller
{
    public function index() {
        $result = DB::table('category')->where('parent', '=', 0)->get();
        return view('user.product.index', ['categories'=> $result]);
    }
    public function Contact(){       
        $result = DB::table('contacts')->get();
        $category = DB::table('category')->where('parent', '=', 0)->get();
        return view('user.product.Contact', ['categories'=> $category, 'contacts'=> $result]);
    }
    public function store (ContactRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $email = $data['email'];
        DB::table('contacts')->insert($data);      
        $email_id = DB::table('contacts')->where('email','LIKE','%'.$email.'%')->first();
        return redirect()->route('sentEmail',['id'=>$email_id->id]);
        
    }

    public function sentEmail($id)
    {
        $email = DB::table('contacts')->where('id',$id)->first();
        Mail::to($email->email)->send(new SentMail());
        return redirect()->route('user.product.index', ['contacts'=> $email]);
    }
}
