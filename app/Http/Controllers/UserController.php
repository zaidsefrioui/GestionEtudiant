<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginIndex(){
        return view('login');
    }
    public function login(Request $request){
        // dd($request->all());
        validator($request->all(),[
            'email' => ['required','email'],
            'password' => ['required']
        ])->validate();
         
        if (auth()->attempt($request->only(['email','password']))) {
            return redirect()->route('home');
        }
        else
        {
            return redirect()->back()->withErrors(['email'=>'password not true']);
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }
}
