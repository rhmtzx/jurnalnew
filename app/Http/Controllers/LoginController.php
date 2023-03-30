<?php

namespace App\Http\Controllers;

use App;
// use auth;
use App\Models\User;
use App\Helpers\Helper;
use App\Models\jurusan;
use App\Models\datadudi;
use App\Models\dataguru;
use App\Models\datasiswa;
use Illuminate\Support\Str;
use App\Exports\UsersExport;
use App\Models\tambahjurnal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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
            'email.exists' => 'Email Yang Anda Masukkan Belum Terdaftar !!',
            'password.required' => 'Masukkan Kata Sandi Anda !!',
            'password.min' => 'Password Minimal 6 Huruf !!',
        ]);
        // toastr()->success('Berhasil Login!');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            return redirect('/')->with('success','Berhasil Login Sebagai Admin');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Guru'])) {
            return redirect('/dashboard')->with('success','Berhasil Login Sebagai Guru');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Siswa'])) {
            return redirect('/dashboard')->with('success','Berhasil Login Sebagai Siswa');
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Dudi'])) {
            return redirect('/dashboard')->with('success','Berhasil Login Sebagai Dudi');
        }

            return redirect('login')->with('error','Password atau Email Salah');

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
            'name'=> 'required|unique:users|regex:/^[a-zA-Z ]+$/',
            'namajurusan'=> 'required',
            'alamatsiswa'=> 'required',
            'notlpsiswa'=> 'required|min:12',
            'kd_guru'=> 'required',
            'kd_dudi'=> 'required',

            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'


        ],[
            'nissiswa.required' => 'NIS Siswa Harus Diisi !!',
            'nissiswa.unique' => 'NIS Siswa Sudah Digunakan !!',
            'name.required' => 'Nama Siswa Harus Diisi !!',
            'name.unique' => 'Nama Siswa Sudah Digunakan !!',
            'name.regex' => 'Nama Siswa Tidak Boleh Menggunakan Angka !!',
            'namajurusan.required' => 'Kelas Jurusan Siswa Harus Diisi !!',
            'alamatsiswa.required' => 'Alamat Siswa Harus Diisi !!',
            'notlpsiswa.required' => 'No Telepon Siswa Harus Diisi !!',
            'notlpsiswa.min' => 'No Telepon Siswa Minimal 12 Nomor !!',
            'kd_guru.required' => 'Kode Guru Harus Diisi !!',
            'kd_dudi.required' => 'Kode Dudi Harus Diisi !!',

            'email.required' => 'Email Harus Diisi !!',
            'email.unique' => 'Email Sudah Digunakan !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.confirmed' => 'Sandi Tidak Sama!!',
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

        event(new Registered($user));

        auth()->login($user);

        return redirect('/email/need-verification')->with('success','Siswa Berhasil Daftar');
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
            'name'=> 'required|regex:/^[a-zA-Z ]+$/',
            'alamat'=> 'required',
            'notlpn'=> 'required|min:12',
            // 'foto' => 'required','unique:posts',

            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'


        ],[
            'nip.required' => 'NIP Guru Harus Diisi !!',
            'nip.unique' => 'NIP Guru Sudah Digunakan !!',
            'name.required' => 'Nama Guru Harus Diisi !!',
            'name.regex' => 'Nama Guru Tidak Boleh Menggunakan Angka !!',
            'alamat.required' => 'Alamat Guru Harus Diisi !!',
            'notlpn.required' => 'No Telepon Guru Harus Diisi !!',
            'notlp.min' => 'No Telepon Guru Minimal 12 Nomor !!',

            'email.required' => 'Email Harus Diisi !!',
            'email.required' => 'Email Harus Diisi !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
            'password.confirmed' => 'Sandi Tidak Sama!!',
            'password.confirmed.required' => 'Isi Password Minimal 6 Huruf !!',
            // 'foto.required' => 'Upload Minimal 1 Foto !!',

        ]);

        $user=user::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'nip' => $request ->nip,
            // 'foto' => $request->foto,

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
            // 'foto' => $request->foto,

        ]);

        event(new Registered($user));

        auth()->login($user);


        return redirect('/email/need-verification')->with('success','Guru Berhasil Daftar');
    }

    public function registerdudi(){
        return view('layout.registerdudi')->with('success','Berhasil Daftar');
    }
    public function registeruserdudi(Request $request){
        $kd_dudi = random_int(100000, 999999);
        // dd($kd_guru2);
        $this->validate($request,[
            'name'=> 'required',
            'namakepdik'=> 'required|unique:datadudis|regex:/^[a-zA-Z ]+$/',
            'alamatdudi'=> 'required',
            'notelepondudi'=> 'required|min:12',
            'foto' => 'required|image|mimes:jpg,png,jpeg','unique:posts',
            'foto' => 'dimensions:max_width=564,max_height=564',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'



        ],[
            'name.required' => 'Nama Dudi Harus Diisi !!',
            // 'name.unique' => 'Nama Dudi Sudah Digunakan !!',
            'namakepdik.required' => 'Nama Kepala Direktur Harus Diisi !!',
            'namakepdik.unique' => 'Nama Kepala Direktur Sudah Digunakan !!',
            'namakepdik.regex' => 'Nama Kepala Direktur Tidak Boleh Menggunakan Angka !!',
            'alamatdudi.required' => 'Alamat Dudi Harus Diisi !!',
            'notelepondudi.required' => 'No Telepon Dudi Harus Diisi !!',
            'notelepondudi.min' => 'No Telepon Dudi Minimal 12 Nomor !!',

            'email.unique' => 'Email Sudah Digunakan !!',
            'email.required' => 'Harus Diisi !!',
            'password.required' => 'Password Harus Diisi !!',
            'password.min' => 'Isi Password Minimal 6 Huruf !!',
            'password.confirmed' => 'Sandi Tidak Sama!!',
            'foto.required' => 'Upload Minimal 1 Foto !!',
            'foto.image' => 'Harus Berupa Foto !!',
            'foto.mimes' => 'Harus Menggunakan Type File Jpg, Png Atau Jpeg !!',
            'foto.dimensions' => 'Ukuran foto maksimal adalah 564 x 564 piksel.'
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
                if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('fotodudi/', $filename);
                $user->foto = $filename;
                $user->save();
            }
        datadudi::create([
            'kd_dudi'=>$user->kd_dudi,
            'namadudi' => $request->name,
            'namakepdik' => $user->namakepdik,
            'alamatdudi' => $user->alamatdudi,
            'notelepondudi' => $user->notelepondudi,
            'user_id' => $user->id,
            'foto' => $user->foto,

        ]);

        event(new Registered($user));

        auth()->login($user);



        return redirect('/email/need-verification')->with('success','Dudi Berhasil Daftar');
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
        $tittle = 'profil';

        return view('siswa.profil', compact('data','jurusan','tittle'));
    }

    public function editprofil(request $request)
    {
        $data = User::findOrFail(Auth::user()->id);
        $tittle = 'editprofil';
        $jurusan = jurusan::all();
        $tittle = 'editprofil';


        return view('siswa.editprofil', compact('data','jurusan','tittle'));
    }



    //Update Profil Siswa
    public function updateprofilsiswa(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data2 = datasiswa::with('namasiswa')->where('user_id', Auth::user()->id);
        $jurusan = jurusan::all();

        $this->validate($request,[
            // 'name'=> 'required|unique:users',
            'foto' => 'image|max:1024|mimes:jpg,png,jpeg', // max size in kilobytes
            'foto' => 'dimensions:max_width=564,max_height=564',

        ],[
            'foto.max' => 'Foto Tidak Boleh Lebih Besar Dari 1 Mb !!',
            'foto.mimes' => 'Harus Menggunakan Type File Jpg, Png Atau Jpeg !!',
            'foto.dimensions' => 'Ukuran foto maksimal adalah 564 x 564 piksel.',
            // 'name.unique' => 'Nama Siswa Sudah Digunakan !!',

        ]);

        $data->update([
            'name' => $request->name,
            'nissiswa' => $request->nissiswa,
            'alamatsiswa' => $request->alamatsiswa,
            'notlpsiswa' => $request->notlpsiswa,
            'kd_guru' => $request->kd_guru,
            'kd_dudi' => $request->kd_dudi,
            'email' => $request->email,
            // 'id_jurusan' => $request->id_jurusan,
        ]);
        if ($request->hasFile('foto')) {
            if ($data->foto && file_exists(public_path('fotodudi/' . $data->foto))) {
                unlink(public_path('fotodudi/' . $data->foto));
            }
            $file = $request->file('foto');
            $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
            $file->move('fotodudi/', $filename);
            $data->foto = $filename;
            $data->save();
        }

        $data2->update([
            'namasiswa' => $data->name,
            'nissiswa' => $data->nissiswa,
            'alamatsiswa' => $data->alamatsiswa,
            'notlpsiswa' => $data->notlpsiswa,
            'kd_guru' => $data->kd_guru,
            'kd_dudi' => $data->kd_dudi,
            // 'namajurusan' => $data->id_jurusan,

        ]);
        return redirect()->route('profil')->with('success', 'Profil Siswa Berhasil Di Update !');
    }

    //Update Profil Guru
    public function updateprofilguru(request $request)
    {
        $data = user::find(Auth::user()->id);
        $data2 = dataguru::with('namaguru')->where('user_id', Auth::user()->id);
        // $data2= Dataguru::find($data->guru_id);

        $this->validate($request,[
            'foto' => 'image|max:1024|mimes:jpg,png,jpeg', // max size in kilobytes
            'foto' => 'dimensions:max_width=564,max_height=564',

        ],[
            'foto.max' => 'Foto Tidak Boleh Lebih Besar Dari 1 Mb !!',
            'foto.mimes' => 'Harus Menggunakan Type File Jpg, Png Atau Jpeg !!',
            'foto.dimensions' => 'Ukuran foto maksimal adalah 564 x 564 piksel.'

        ]);

        $data->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notlpn' => $request->notlpn,
            'kd_guru' => $request->kd_guru,
            'email' => $request->email,
        ]);
        if ($request->hasFile('foto')) {
            if ($data->foto && file_exists(public_path('fotodudi/' . $data->foto))) {
                unlink(public_path('fotodudi/' . $data->foto));
            }
            $file = $request->file('foto');
            $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
            $file->move('fotodudi/', $filename);
            $data->foto = $filename;
            $data->save();
        }
        $data2->update([
            'nip' => $data->nip,
            'namaguru' =>$data->name,
            'alamat' => $data->alamat,
            'notlpn' => $data->notlpn,
            'kd_guru' => $data->kd_guru,
        ]);
        // $data2->update([
        //     'namaguru'=>$request->name
        // ]);
        return redirect()->route('profil')->with('success', 'Profil Guru Berhasil Di Update !');
    }

    //Update Profil Dudi
    public function updateprofildudi(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data2 = datadudi::with('namadudi')->where('user_id', Auth::user()->id);

        // $data2= Datadudi::Where($data->user_id);
        $this->validate($request,[
            'foto' => 'image|max:1024|mimes:jpg,png,jpeg', // max size in kilobytes
            'alamatdudi' => 'required',
            'foto' => 'dimensions:max_width=564,max_height=564',
        ],[
            'alamatdudi.required' => 'Harus Diisi !!',
            'foto.image' => 'Foto Harus Berupa Foto !!',
            'foto.max' => 'Foto Tidak Boleh Lebih Besar Dari 1 Mb !!',
            'foto.mimes' => 'Harus Menggunakan Type File Jpg, Png Atau Jpeg !!',
            'foto.dimensions' => 'Ukuran foto maksimal adalah 564 x 564 piksel.'
        ]);

        $data->update([
            'name' => $request->name,
            'alamatdudi' => $request->alamatdudi,
            'kd_dudi' => $request->kd_dudi,
            'namakepdik' => $request->namakepdik,
            'email' => $request->email,
            'notelepondudi' => $request->notelepondudi,

            // 'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            if ($data->foto && file_exists(public_path('fotodudi/' . $data->foto))) {
                unlink(public_path('fotodudi/' . $data->foto));
            }
            $file = $request->file('foto');
            $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
            $file->move('fotodudi/', $filename);
            $data->foto = $filename;
            $data->save();
        }

        $data2->update([
            'namadudi' => $data->name,
            'alamatdudi' => $data->alamatdudi,
            'kd_dudi' => $data->kd_dudi,
            'namakepdik' => $data->namakepdik,
            'notelepondudi' => $data->notelepondudi,
            'foto' => $data->foto,
        ]);

        return redirect()->route('profil')->with('success', 'Profil Dudi Berhasil Di Update !');

    }

    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect('/dashboard');
    }

    public function notice(){
        return view('verification.notice');
    }

    public function send(Request $request){
        $request->user()->sendEmailVerificationNotification();

        return back();
    }

    public function export()
{
    return Excel::download (new UsersExport, 'JurnalSiswa.xlsx');
}
}
