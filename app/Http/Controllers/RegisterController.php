<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    // make a function Register
    public function index() {
        return view('register');
    }

    
    public function store(Request $request) {
        // menyimpan data user baru
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

    //     if(!$user) {
    //         Session::flash('error', 'Register Gagal');
    //     }
    //     Session::flash('message', 'Register Berhasil');
    //     return redirect()->route('login');
    // }

    if (!$user) {
        session()->flash('error', 'Register Gagal');
        return redirect()->back();
    }
    
    session()->flash('message', 'Register Berhasil, anda bisa langsung login sekarang');
    return redirect()->route('login');
    
    }
}
