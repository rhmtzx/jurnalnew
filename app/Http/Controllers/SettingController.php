<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;


class SettingController extends Controller
{
    public function index(){
    	$tittle = 'setting';
		$data = Setting::where('user_id', auth()->id())->get();
        // $data = Setting::with('namasiswa')->where('user_id', auth()->id())->get();

    	return view('userdudi.setting.setting',compact('tittle','data'));
    }

    public function tambahsetting(){
    	$tittle = 'setting';
    	return view('userdudi.setting.tambahsetting',compact('tittle'));

    }

   public function insertsetting(Request $request){

    $this->validate($request,[
        'masuk' => 'required',
        'keluar' => 'required',
    ],[
        'masuk.required' => 'Waktu Masuk Harus Diisi !!',
        'keluar.required' => 'Waktu Keluar Harus Diisi !!',
    ]);

    $existingData = Setting::where('kd_dudi', auth()->user()->kd_dudi)->first();

    if($existingData){
        return redirect()->route('datasetting')->with('error', 'Anda Hanya Bisa Menambah Data Masuk Dan Keluar Satu Kali !!');
    } else {
        $data = Setting::create([
            'masuk' => $request->masuk,
            'keluar' => $request->keluar,

            'masukk' => $request->masukk,
            'keluarr' => $request->keluarr,

            'kd_dudi' => auth()->user()->kd_dudi,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('datasetting')->with('success', 'Data Berhasil Di Tambahkan !!');
    }
    }
    public function tampilsetting($id){
        $tittle = 'setting';
    	$data = Setting::findOrfail($id);

    	return view('userdudi.setting.tampilsetting',compact('tittle','data'));
    }

    public function updatedatasetting(Request $request,$id){
    	$data = Setting::find($id);
        $data->update([
                'masuk' =>$request->masuk,
                'keluar' =>$request->keluar,
                'masukk' =>$request->masukk,
                'keluarr' =>$request->keluarr,
            ]);

            return redirect()->route('datasetting')->with('success', 'Data Berhasil Diupdate');
    }

    public function deletesetting($id){
    	$data = Setting::find($id);
    	$data->delete();
        return back();

    }

}
