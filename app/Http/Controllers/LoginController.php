<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\datadudi;
use App\Models\dataguru;
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
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',
        ],[
            'email.required' => 'Masukkan Email Anda!',
            'email.exists' => 'Email Salah!',
            'password.required' => 'Masukkan Kata Sandi Anda!',
            'password.min' => 'Password Minimal 6 Huruf',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Guru'])) {
            return redirect('/dashboard');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Siswa'])) {
            return redirect('/dashboard');
        }
        
            return redirect('login')->with('password','Password Salah');
        
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
            'role' => 'Admin'
        ]);

        return redirect('/login')->with('success', 'Berhasil Login');;
    }

    public function loginuser(){
        return view('layout.loginguru');
    }

    public function loginprosesuser(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }

            return redirect('loginuser');

        }
        public function registersiswa(){
            return view('layout.registersiswa')->with('success','Berhasil Daftar');
        }

    public function registerusersiswa(Request $request){
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
            'role' => 'Siswa'
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




        return redirect('/login')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function registerguru(){
        return view('layout.registerguru')->with('success','Berhasil Daftar');
    }
    public function registeruserguru(Request $request){
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
            'role' => 'Guru'
        ]);

        dataguru::create([
            'nip' => $request ->nip,
            'namaguru' => $request ->name,
            'alamat' => $request ->alamat,
            'notlpn' => $request ->notlpn,
            'user_id' => $user->id,

        ]);

        return redirect('/login')->with('success','Berhasil Daftar');
    }


    // public function loginsiswa(){
    //     return view('layout.loginsiswa');
    // }

    // public function loginprosessiswa(Request $request){

    //     if(Auth::attempt($request->only('nisiswa','email','password'))){
    //         return redirect('/dashboard');
    //     }

    //         return redirect('login');

    // }


    // public function registerusersiswa(Request $request){
    //     // dd($request->all());
    //     $this->validate($request,[
    //         'email' => 'required|unique:users',
    //         'password' => 'required|min:6'

    //     ],[
        //         'email.unique' => 'Email Sudah Digunakan',
    //         'email.required' => 'Harus Diisi',
    //         'password.min' => 'Isi Password Minimal 6 Huruf'
    //     ]);

    //     $user=User::create([
    //         'name' => $request ->name,
    //         'email' => $request ->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //         'role' => 'Siswa'
    //     ]);

    //     datasiswa::create([
    //         'nissiswa' => $request ->nissiswa,
    //         'namasiswa' => $request ->name,
    //         'kelas' => $request ->kelas,
    //         'jurusan' => $request ->jurusan,
    //         'alamatsiswa' => $request ->alamatsiswa,
    //         'notlpsiswa' => $request ->notlpsiswa,
    //         'user_id' => $user->id,
    //     ]);



    //     return redirect('/loginsiswa');
    // }


    // public function loginguru(){
    //     return view('layout.loginguru');
    // }

    // public function loginprosesguru(Request $request){

    //     if(Auth::attempt($request->only('email','password'))){
    //         return redirect('/dashboard');
    //     }

    //         return redirect('login');

    // }


    // public function registeruserguru(Request $request){
    //     // dd($request->all());
    //     $this->validate($request,[
    //         'email' => 'required|unique:users',
    //         'password' => 'required|min:6'

    //     ],[
    //         'email.unique' => 'Email Sudah Digunakan',
    //         'email.required' => 'Harus Diisi',
    //         'password.min' => 'Isi Password Minimal 6 Huruf'
    //     ]);

    //     $user=User::create([
    //         'name' => $request ->name,
    //         'email' => $request ->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60),
    //         'role' => 'guru'
    //     ]);

    //     dataguru::create([
    //         'nip' => $request ->nip,
    //         'namaguru' => $request ->name,
    //         'alamat' => $request ->alamat,
    //         'notlpn' => $request ->notlpn,
    //         'user_id' => $user->id,

    //     ]);

    //     // if($request->hasFile('foto')){
    //     //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
    //     //     $user->foto = $request->file('foto')->getClientOriginalName();
    //     //     $user->save();
    //     // }

    //     return redirect('/loginguru');
    // }

    public function logout(){
        Auth::logout();
        return redirect('landinghome')->with('success','Berhasil Logout');
    }

    public function landinghome(){
        return view('landing.home');
    }

    public function dashboard(){
        return view('siswa.welcomes');
    }

    public function profil()
    {
        $data = User::all();
        return view('layout.profil', compact('data'));
    }
    public function editprofil(request $request)
    {
        $data = User::findOrFail(Auth::user()->id);

        return view('layout.editprofil', compact('data'));
    }
    public function updateprofil(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profil')->with('success', 'Profil berhasil di Ganti!');
    }

}
