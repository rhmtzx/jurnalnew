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
