<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\kirimEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use App\Http\Controllers\Fortify;
use App\Http\Controllers\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Support\Responsable;

class ForgotPasswordController extends Controller
{
    public function create(){
        return view('layout.forgot-password');

    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required|exists:users,email'
        ],[
            'email.required'=>'Email Harus Di isi!!',
            'email.exists'=>'Email Belum Terdaftar!!'

        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status = Password::RESET_LINK_SENT
                ? back()->with('success','Berhasil Mengirim Email!!')
                : back()->withInput($request->only('email'))
                        ->withErrors(['email'=>($status)]);

}
    public function reset(Request $request){
        return view('layout.reset-password',['request'=>$request]);
    }

    public function rapli(Request $request){
        $request->validate([
            'token' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', 'confirmed'],

        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function($user) use ($request){
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' =>Str::random(60),

                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('success','Reset Password Berhasil')
                : back()->withInput($request->only('email'))
                        ->withErrors(['email' => ($status)]);
    }
}
