<?php

namespace App\Http\Controllers;
use App\Models\datasiswa;
use App\Models\dataabsen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataabsenController extends Controller
{
    public function index(){

        $data = dataabsen::with('namasiswa')->where('student_id', auth()->id())->get();
        $data3 = dataabsen::with('namasiswa')->get();
        $data2 = dataabsen::with('namasiswa')->where('kd_guru',auth()->user()->kd_guru)->get();
        $data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();

        // dd($data2);
        if(Auth()->user()->role == 'Admin'){
            return view('dataabsen.dataabsen',compact('data3'));
        }else if(Auth()->user()->role == 'Guru'){
            return view('userguru.dataabsen.dataabsen',compact('data','data2'));
        }else if(Auth()->user()->role == 'Dudi'){
            return view('userdudi.dataabsen.dataabsen',compact('data','data4'));
        }else{
            return view('user.dataabsen.dataabsen',compact('data','data2','data4'));
        }
    }

    public function tambahabsen(){
        $data = datasiswa::where('namasiswa', Auth::user()->name)->get();
        if(Auth()->user()->role == 'Admin'){
            return view('dataabsen.tambahabsen',compact('data'));
        }else{
            return view('user.dataabsen.tambahabsen',compact('data'));
        }
    }

    public function insertabsen(Request $request){

            $this->validate($request,[
                  'keterangan' => 'required',
                  'statusjurnal' => 'required',
                  // 'foto' => 'required',
                  'usersiswa' => 'required',

             ],[
                 'keterangan.required' => 'Silahkan Pilih Salah Satu',
                 'statusjurnal.required' => 'Silahkan Pilih',
                 // 'foto.required' => 'Harus diisi',
                 'usersiswa.required' => 'Harus diisi',

             ]);

            $data = dataabsen::create([
                'keterangan' =>$request->keterangan,
                'statusjurnal' =>$request->statusjurnal,
                'foto' =>$request->foto,
                'usersiswa' =>$request->usersiswa,
                'student_id' =>auth()->user()->id,
                'kd_guru'=>auth()->user()->kd_guru,
                'kd_dudi'=>auth()->user()->kd_dudi


            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            if(Auth()->user()->role == 'Admin'){
            return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Ditambahkan');
            }else{
            return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Ditambahkan');

            }
        }
        public function tampilabsen($id){
            $data = dataabsen::findOrfail($id);
            $datas = datasiswa::where('namasiswa', Auth::user()->name)->get();
        	$data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();
        	$data2 = dataabsen::with('namasiswa')->where('kd_guru',auth()->user()->kd_guru)->get();

            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('dataabsen.tampilabsen', compact('data','datas'));
            }else if(Auth()->user()->role == 'Guru'){
            	return view('userguru.dataabsen.tampilabsen',compact('data','data2'));
        	}else if(Auth()->user()->role == 'Dudi'){
            	return view('userdudi.dataabsen.tampilabsen',compact('data','data4'));
        	}else{
            	return view('user.dataabsen.tampilabsen',compact('data','datas'));
        }
        }

        public function detailabsen($id){
         //    $data = dataabsen::with('namasiswa')->where('student_id', auth()->id())->get();
        	// $data3 = dataabsen::with('namasiswa')->get();
        	// $data2 = dataabsen::with('namasiswa')->where('kd_guru',auth()->user()->kd_guru)->get();
        	$data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();
        	$data = dataabsen::all();
        	$absen = dataabsen::first();
        	$each = dataabsen::findOrfail();
            //dd($data);
            if(Auth()->user()->role == 'Admin'){
            	return view('dataabsen.dataabsen',compact('data3'));
        	}else{
            	return view('user.dataabsen.detailabsen',compact('data','data2','data4','absen','each'));
        	}
        }

        public function updateabsen(Request $request, $id){
            $data = dataabsen::find($id);
            $data->update([
                'keterangan' =>$request->keterangan,
                'statusjurnal' =>$request->statusjurnal,
                'usersiswa' =>$request->usersiswa,

            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Diupdate');
                }else{
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Diupdate');

                }
        }

        public function deleteabsen($id){
            $data = dataabsen::find($id);
            $data->delete();
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Di Delete');
            }
        }
}
