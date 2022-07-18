<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Contact\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SentMail;

class HomeController extends Controller
{
    public function master () {
        return view('master');
    }
    public function event () {
        // $data = DB::table('events')->get();
        // return view('event', ['events' => $data]);
        return view('event');
        
    }
    public function information () {
        return view('information');
    }
     
    public function contact(){       
        $result = DB::table('contacts')->get();
        $category = DB::table('categorys')->where('parent', '=', 0)->get();
        return view('contact', ['categories'=> $category, 'contacts'=> $result]);
    }
    public function store (ContactRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = new \DateTime();
        $email = $data['email'];
        DB::table('contacts')->insert($data);      
        $email_id = DB::table('contacts')->where('email','LIKE','%'.$email.'%')->first();
        return redirect()->route('sentEmail',['id'=>$email_id->id])->with('success', 'Insert Successfully');
        
    }

    public function sentEmail($id)
    {
        $email = DB::table('contacts')->where('id',$id)->first();
        Mail::to($email->email)->send(new SentMail());
        return redirect()->route('contact', ['contacts'=> $email]);
    }

    public function infor ($id) {
        $data = DB::table('events')->where('id', $id)->first();
        return view('infor', ['events' => $data]);
    }

    public function list () {
        $data = DB::table('events')->get();
        return view('list', ['events' => $data]);
    }
}
