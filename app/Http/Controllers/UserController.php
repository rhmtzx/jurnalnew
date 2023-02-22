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
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete($id);
        return redirect()->route('user')->with('message', 'Akun Berhasil Di Hapus');
    }
}
