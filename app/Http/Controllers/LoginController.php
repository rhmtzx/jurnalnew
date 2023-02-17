<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Helper;
use App\Models\datadudi;
use App\Models\dataguru;
use App\Models\jurusan;
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
            'email.required' => 'Masukkan Email Anda !!',
            'email.exists' => 'Email Yang Anda Masukkan Salah !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Guru'])) {
            return redirect('/dashboard');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Siswa'])) {
            return redirect('/dashboard');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Dudi'])) {
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
        $data = jurusan::all();
            return view('layout.registersiswa',compact('data'))->with('success','Berhasil Daftar');
        }

    public function registerusersiswa(Request $request){

        // dd($request->all());
        $this->validate($request,[
            'nissiswa'=> 'required|unique:datasiswas',
            'name'=> 'required',
            'namajurusan'=> 'required',
            'alamatsiswa'=> 'required',
            'notlpsiswa'=> 'required',
            'kd_guru'=> 'required',
            'kd_dudi'=> 'required',

            'email' => 'required|unique:users',
            'password' => 'required|min:6',

        ],[
            'nissiswa.required' => 'NIS Siswa Harus Diisi !!',
            'nissiswa.unique' => 'NIS Siswa Sudah Digunakan !!',
            'name.required' => 'Nama Siswa Harus Diisi !!',
            // 'name.unique' => 'Nama Siswa Sudah Digunakan !!',
            'namajurusan.required' => 'Kelas Jurusan Siswa Harus Diisi !!',
            'alamatsiswa.required' => 'Alamat Siswa Harus Diisi !!',
            'notlpsiswa.required' => 'No Telepon Siswa Harus Diisi !!',
            'kd_guru.required' => 'Kode Guru Harus Diisi !!',
            'kd_dudi.required' => 'Kode Dudi Harus Diisi !!',

            'email.required' => 'Email Harus Diisi !!',
            'email.unique' => 'Email Sudah Digunakan !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
        ]);

        $user=User::create([
            'name' => $request ->name,
            'email' => $request ->email,

            'nissiswa' => $request ->nissiswa,
            'alamatsiswa' => $request ->alamatsiswa,
            'notlpsiswa' => $request ->notlpsiswa,
            
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'kd_guru' => $request->kd_guru,
            'kd_dudi' => $request->kd_dudi,
            'id_jurusan'=>$request->namajurusan,
            'role' => 'Siswa'
        ]);

        datasiswa::create([
            'namasiswa' => $request ->name,
            'nissiswa' => $request ->nissiswa,
            'namajurusan' => $user->id_jurusan,
            'kd_guru' => $request ->kd_guru,
            'kd_dudi' => $request ->kd_dudi,
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
        $kd_guru = Helper::IDGenerator(new dataguru, 'kd_guru', 5, 'SKNS' );
        $kd_guru2 = random_int(100000, 999999);
        // dd($kd_guru2);
        $this->validate($request,[
            'nip'=> 'required|unique:datagurus',
            'name'=> 'required',
            'alamat'=> 'required',
            'notlpn'=> 'required',
            'foto' => 'required','unique:posts',

            'email' => 'required|unique:users',
            'password' => 'required|min:6',

        ],[
            'nip.required' => 'NIP Guru Harus Diisi !!',
            'nip.unique' => 'NIP Guru Sudah Digunakan !!',
            'name.required' => 'Nama Guru Harus Diisi !!',
            'alamat.required' => 'Alamat Guru Harus Diisi !!',
            'notlpn.required' => 'No Telepon Guru Harus Diisi !!',

            'email.required' => 'Email Harus Diisi !!',
            'email.required' => 'Email Harus Diisi !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
            'foto.required' => 'Upload Minimal 1 Foto !!',    

        ]);

        $user=user::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'nip' => $request ->nip,
            'foto' => $request->foto,
                
            'alamat' => $request ->alamat,
            'notlpn' => $request ->notlpn,

            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'kd_guru' => $kd_guru2,
            'role' => 'Guru',
        ]);

        dataguru::create([
            'kd_guru'=>$user->kd_guru,
            'nip' => $request ->nip,
            'namaguru' => $request ->name,
            'alamat' => $request ->alamat,
            'notlpn' => $request ->notlpn,
            'user_id' => $user->id,
            'foto' => $request->foto,

        ]);

        return redirect('/login')->with('success','Berhasil Daftar');
    }

    public function registerdudi(){
        return view('layout.registerdudi')->with('success','Berhasil Daftar');
    }
    public function registeruserdudi(Request $request){
        // $kd_guru = Helper::IDGenerator(new dataguru, 'kd_guru', 5, 'SKNS' );
        $kd_dudi = random_int(100000, 999999);
        // dd($kd_guru2);
        $this->validate($request,[
            'name'=> 'required',
            'namakepdik'=> 'required|unique:datadudis',
            'alamatdudi'=> 'required',
            'notelepondudi'=> 'required',
            'foto' => 'required','unique:posts',

            'email' => 'required|unique:users',
            'password' => 'required|min:6'

        ],[
            'name.required' => 'Nama Dudi Harus Diisi !!',
            // 'name.unique' => 'Nama Dudi Sudah Digunakan !!',
            'namakepdik.required' => 'Nama Kepala Direktur Harus Diisi !!',
            'namakepdik.unique' => 'Nama Kepala Direktur Sudah Digunakan !!',
            'alamatdudi.required' => 'Alamat Dudi Harus Diisi !!',
            'notelepondudi.required' => 'No Telepon Dudi Harus Diisi !!',

            'email.unique' => 'Email Sudah Digunakan !!',
            'email.required' => 'Harus Diisi !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
            'foto.required' => 'Upload Minimal 1 Foto !!',    

        ]);

        $user= user::create([
            'name' => $request ->name,
            'email' => $request ->email,

            'alamatdudi' => $request ->alamatdudi,
            'notelepondudi' => $request ->notelepondudi,
            'namakepdik' => $request->namakepdik,
            'foto' => $request->foto,

            'kd_dudi' => $kd_dudi,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'role' => 'Dudi',
        ]);

        datadudi::create([
            'kd_dudi'=>$user->kd_dudi,
            'foto' => $request->foto,
            'namadudi' => $request->name,
            'namakepdik' => $user->namakepdik,
            'alamatdudi' => $user->alamatdudi,
            'notelepondudi' => $user->notelepondudi,
            'user_id' => $user->id,

        ]);

        return redirect('/login')->with('success','Berhasil Daftar');
    }




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


    

    // Siswa Guru Dan Dudi
    public function profil()
    {
        $data = User::all();
        $jurusan = jurusan::all();

        return view('siswa.profil', compact('data','jurusan'));
    }

    public function editprofil(request $request)
    {
        $data = User::findOrFail(Auth::user()->id);
        $jurusan = jurusan::all();

        return view('siswa.editprofil', compact('data','jurusan'));
    }   

    //Update Profil Siswa
    public function updateprofilsiswa(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data2 = datasiswa::with('namasiswa')->where(Auth::user()->user_id);
        $jurusan = jurusan::all();

        $data->update([
            'name' => $request->name,
            'nissiswa' => $request->nissiswa,
            'alamatsiswa' => $request->alamatsiswa,
            'notlpsiswa' => $request->notlpsiswa,
            'kd_guru' => $request->kd_guru,
            'kd_dudi' => $request->kd_dudi,
            'email' => $request->email,
            'id_jurusan' => $request->id_jurusan,
        ]);
        $data2->update([
            'namasiswa' => $request->name,
            'nissiswa' => $request->nissiswa,
            'alamatsiswa' => $request->alamatsiswa,
            'notlpsiswa' => $request->notlpsiswa,
            'kd_guru' => $request->kd_guru,
            'kd_dudi' => $request->kd_dudi,
            'namajurusan' => $request->id_jurusan,
            
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profil')->with('success', 'Profil Siswa Berhasil Di Update !');
    }

    //Update Profil Guru
    public function updateprofilguru(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data2 = dataguru::with('namaguru')->where(Auth::user()->user_id);
        // $data2= Dataguru::find($data->guru_id);

        $data->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notlpn' => $request->notlpn,
            'kd_guru' => $request->kd_guru,
            'email' => $request->email,

        ]);
        $data2->update([
            'nip' => $request->nip,
            'namaguru' =>$request->name,
            'alamat' => $request->alamat,
            'notlpn' => $request->notlpn,
            'kd_guru' => $request->kd_guru,
            
        ]);
        // $data2->update([
        //     'namaguru'=>$request->name
        // ]);

        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profil')->with('success', 'Profil Guru Berhasil Di Update !');
    }

    //Update Profil Dudi
    public function updateprofildudi(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data2 = datadudi::with('namadudi')->where(Auth::user()->user_id);
        
        // $data2= Datadudi::Where($data->user_id);

        $data->update([
            'name' => $request->name,
            'alamatdudi' => $request->alamatdudi,
            'kd_dudi' => $request->kd_dudi,
            'namakepdik' => $request->namakepdik,
            'email' => $request->email,
            'notelepondudi' => $request->notelepondudi,

            // 'foto' => $request->foto,
        ]);
        $data2->update([
            'namadudi' => $request->name,
            'alamatdudi' => $request->alamatdudi,
            'kd_dudi' => $request->kd_dudi,
            'namakepdik' => $request->namakepdik,
            'notelepondudi' => $request->notelepondudi,
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profil')->with('success', 'Profil Dudi Berhasil Di Update !');

        
        
    }
}
