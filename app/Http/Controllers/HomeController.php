<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function master () {
        return view('master');
    }
    public function event () {
        $data = DB::table('events')->get();
        return view('event', ['events' => $data]);
        
    }
    public function information () {
        return view('information');
    }
     
    public function contact () {
        return view('contact');
    }
}
