<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // make function login
    public function login() {
        return view('login');
    }

    public function checkLogin(Request $request){
        // dd($request);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else {
            session()->flash('error', 'Email atau Password Salah');
            return redirect()->route('login');          
        }
    }
    public function logout(){
       Auth::logout();
       redirect()->route('login');     
    }
}
