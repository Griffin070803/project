<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getlogin () {
        if (Auth::check()) {
            return redirect()->route('admin.member.index');
        }
        return view('login');
    }

    public function postlogin (LoginRequest $request) {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $credentials["level"] = 1;
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('admin.member.index');
        }
 
        return redirect()->route('getlogin')->with('error', 'Member dont exist');
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('getlogin');
    }
}
