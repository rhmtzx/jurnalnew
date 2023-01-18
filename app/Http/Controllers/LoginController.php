<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('layout.login');
    }

    public function loginproses(Request $request){

        if(Auth::attempt($request->only('name','password'))){
            return redirect('/');
        }

            return redirect('login');

    }

    public function register(){
        return view('layout.register');
    }

    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
