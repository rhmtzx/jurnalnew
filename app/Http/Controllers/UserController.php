<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function datauser() {
        $data = User::all();

        return view('datauser.datauser')->with(compact('data'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->back()->with('success', 'Akun Berhasil Di Hapus');
    }
}
