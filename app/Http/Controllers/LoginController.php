<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\datadudi;
use App\Models\datasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('layout.login');
    }

    public function loginproses(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
                // dd($request->all());

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
            'role' => 'admin'
        ]);

        return redirect('/login');
    }


    public function loginsiswa(){
        return view('layout.login');
    }

    public function loginprosessiswa(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

            return redirect('login');

    }

    public function registersiswa(){
        return view('layout.registersiswa');
    }

    public function registerusersiswa(Request $request){
        // dd($request->all());
        $user=User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => 'siswa'
        ]);

        datasiswa::create([
            'nissiswa' => $request ->nissiswa,
            'namasiswa' => $request ->name,
            'kelas' => $request ->kelas,
            'jurusan' => $request ->jurusan,
            'alamatsiswa' => $request ->alamatsiswa,
            'notlpsiswa' => $request ->notlpsiswa,
            'user_id' => $user->id,
        ]);



        return redirect('/login');
    }


    public function loginmagang(){
        return view('layout.login');
    }

    public function loginprosesmagang(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

            return redirect('login');

    }

    public function registermagang(){
        return view('layout.registermagang');
    }

    public function registerusermagang(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required|unique:users',
            'password' => 'required|min:6'

        ],[
            'email.unique' => 'Email Sudah Digunakan',
            'email.required' => 'Harus Diisi',
            'password.min' => 'Isi Password Minimal 6 Huruf'


        ]);
        $user=User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => 'Dudi'
        ]);

        datadudi::create([
            'namadudi' => $request ->name,
            'namakepdik' => $request ->namakepdik,
            'alamatdudi' => $request ->alamatdudi,
            'user_id' => $user->id,

        ]);

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('landinghome');
    }

    public function landinghome(){
        return view('landing.home');
    }
}
