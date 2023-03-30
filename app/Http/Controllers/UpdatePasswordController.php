<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UpdatePasswordController extends Controller
{
    public function editpassword(){
        $tittle = 'editpassword';
        return view('layout.editpassword',compact('tittle'));
    }

    public function updatepasswordsiswa(request $request){
        $request->validate([
            'current_password' => 'required|min:6|max:100|password',
            'password' => 'required|min:6|max:100|confirmed|regex:/[0-9]+/|regex:/[A-Z]+/',
            'password_confirmation' => 'required'
        ], [
            'current_password.password' => 'Password Lama Salah.',
            'current_password.required' => 'sandi lama harus diisi',
            'current_password.min' => 'sandi harus lebih dari 6',
            'password.required' => 'sandi baru harus diisi',
            'password.min' => 'sandi harus lebih dari 6',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar dan satu angka.',
            'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
            'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);

        $data = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $data->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

        $data->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('profil')->with('success', 'Profil Siswa Berhasil Di Update !');
    }

    public function updatepassworddudi(request $request){
        $request->validate([
            'current_password' => 'required|min:6|max:100|password',
            'password' => 'required|min:6|max:100|confirmed|regex:/[0-9]+/|regex:/[A-Z]+/',
            'password_confirmation' => 'required'
        ], [
            'current_password.password' => 'Password Lama Salah.',
            'current_password.required' => 'sandi lama harus diisi',
            'current_password.min' => 'sandi harus lebih dari 6',
            'password.required' => 'sandi baru harus diisi',
            'password.min' => 'sandi harus lebih dari 6',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar dan satu angka.',
            'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
            'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);
        $data = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $data->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

        $data->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('profil')->with('success', 'Profil Dudi Berhasil Di Update !');
    }
    public function updatepasswordguru(request $request){
        $request->validate([
            'current_password' => 'required|min:6|max:100|password',
            'password' => 'required|min:6|max:100|confirmed|regex:/[0-9]+/|regex:/[A-Z]+/',
            'password_confirmation' => 'required'
        ], [
            'current_password.password' => 'Password Lama Salah.',
            'current_password.required' => 'sandi lama harus diisi',
            'current_password.min' => 'sandi harus lebih dari 6',
            'password.required' => 'sandi baru harus diisi',
            'password.min' => 'sandi harus lebih dari 6',
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar dan satu angka.',
            'password.confirmed' => 'sandi ini harus sama dengan sandi baru',
            'password_confirmation.required' => 'konfirmasi sandi harus diisi',

        ]);
        $data = User::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $data->password)) {
            return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

        $data->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('profil')->with('success', 'Profil Dudi Berhasil Di Update !');
    }

}
