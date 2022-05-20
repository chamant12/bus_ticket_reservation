<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        return view('login.login');
    }

    public function processLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('reservations');
        }
 
        return back()->withErrors([
            'email' => 'Invalid username or password',
        ])->withInput();
    }

    public function logout(){
        Session::flush();
        
        Auth::logout();
 
        return redirect()->route('login');
    }
}
