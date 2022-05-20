<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegistrationController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function processRegistration(Request $request){ 
        $validator = Validator::make($request->all(),[
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator, 'register')->withInput();
        } else {
            try{
                $user = User::create(request(['firstName','lastName', 'email', 'password']));
                auth()->login($user);
        
                return redirect()->route('reservations');
            } catch(Exception $e){
                return back()->withErrors([
                    'firstName' => $e->getMessage(),
                ])->withInput();
            }
        }
    }
}

