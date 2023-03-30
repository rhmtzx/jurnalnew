<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Carbon\Carbon;
use App\Models\dataabsen;
use App\Models\datasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DataabsenController extends Controller
{
    public function index(){

        $data = dataabsen::with('namasiswa')->where('student_id', auth()->id())->get();
        $data3 = dataabsen::with('namasiswa')->get();
        $data2 = dataabsen::with('namasiswa')->where('kd_guru',auth()->user()->kd_guru)->get();
        $data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();
        $data5 = datasiswa::where('kd_guru', Auth::user()->kd_guru)->get();
        $data6 = datasiswa::where('kd_dudi', Auth::user()->kd_dudi)->get();
        $tittle = 'dataabsen';

        // dd($data2);
        if(Auth()->user()->role == 'Admin'){
            return view('dataabsen.dataabsen',compact('data3'));
        }else if(Auth()->user()->role == 'Guru'){
            return view('userguru.dataabsen.dataabsen',compact('data','data2','tittle','data5'));
        }else if(Auth()->user()->role == 'Dudi'){
            return view('userdudi.dataabsen.dataabsen',compact('data','data4','tittle','data6'));
        }else{
            return view('user.dataabsen.dataabsen',compact('data','data2','data4','tittle'));
        }
    }

    public function dataaa($id){
        $datah = Absensi::with('namasiswa')->where('usersiswa',$id)->get();


        return view('dataabsen.dataaa',compact('datah'));
    }

    public function absensguru($id){
        $data4 = dataabsen::with('namasiswa')->where('usersiswa',$id)->get();
        $tittle = 'dataabsen';


        return view('userguru.dataabsen.absensguru',compact('data4','tittle'));
    }

    public function absensdudi($id){
        $data4 = dataabsen::with('namasiswa')->where('usersiswa',$id)->get();
        $tittle = 'dataabsen';


        return view('userdudi.dataabsen.absensdudi',compact('data4','tittle'));
    }

    public function tambahabsen(){
        $data = datasiswa::where('namasiswa', Auth::user()->name)->get();
        $tittle = 'dataabsen';
        if(Auth()->user()->role == 'Admin'){
            return view('dataabsen.tambahabsen',compact('data'));
        }else{
            return view('user.dataabsen.tambahabsen',compact('data','tittle'));
        }
    }

    public function insertabsen(Request $request){

            $this->validate($request,[
                  'keterangan' => 'required',
                  // 'statusjurnal' => 'required',
                  'foto' => 'required|mimes:jpg,png,jpeg',
                  'usersiswa' => 'required',

             ],[
                 'keterangan.required' => 'Silahkan Pilih Salah Satu !!',
                 // 'statusjurnal.required' => 'Silahkan Pilih',
                 'foto.mimes' => 'Foto harus berupa file jpg,png atau jpeg !!',
                 'foto.required' => 'Foto harus diisi !!',
                 'usersiswa.required' => 'Harus diisi !!',

             ]);

             $id_siswa = $request->input('usersiswa');
             $absensi = dataabsen::where('usersiswa', $id_siswa)
                               ->whereDate('created_at', Carbon::today())
                               ->first();
             if ($absensi) {
                return redirect()->route('dataabsen')->with('error', 'Anda Telah Izin Hari Ini !!');
             }



            $data = dataabsen::create([
                'keterangan' =>$request->keterangan,
                'statusjurnal' =>'Menunggu Persetujuan',
                'foto' =>$request->foto,
                'usersiswa' =>$request->usersiswa,
                'student_id' =>auth()->user()->id,
                'id_jurusan' =>auth()->user()->id_jurusan,
                'kd_guru'=>auth()->user()->kd_guru,
                'kd_dudi'=>auth()->user()->kd_dudi


            ]);
            // dd($request->all);

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('fotodudi/', $filename);
                $data->foto = $filename;
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
            $tittle = 'dataabsen';

            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('dataabsen.tampilabsen', compact('data','datas'));
            }else if(Auth()->user()->role == 'Guru'){
            	return view('userguru.dataabsen.tampilabsen',compact('data','data2'));
        	}else if(Auth()->user()->role == 'Dudi'){
            	return view('userdudi.dataabsen.tampilabsen',compact('data','data4','tittle'));
        	}else{
            	return view('user.dataabsen.tampilabsen',compact('data','datas','tittle'));
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
                'statusjurnal' =>'Menunggu Persetujuan',
                'usersiswa' =>$request->usersiswa,

            ]);

            if ($request->hasFile('foto')) {
                unlink(public_path('fotodudi/' . $data->foto));
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('fotodudi/', $filename);
                $data->foto = $filename;
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
            unlink(public_path('fotodudi/' . $data->foto));
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('dataabsen')->with('succes', 'Data Berhasil Di Delete');
            }
        }

    // APPROVE ABSEN DITERIMA
	public function statusditerimaa(Request $request, $id)
    {
            $data = dataabsen::find($id);
            $data->update([
                'statusjurnal' => 'Telah Disetujui',
    ]);
        return redirect()->back()->with('success', 'Absen Telah Di Setujui');
	}
	// UNAPPROVE ABSEN DITOLAK
	public function statusditolaka(Request $request, $id)
    {
            $data = dataabsen::find($id);
            $data->update([
                'statusjurnal' => 'Izin Ditolak',
    ]);
        return redirect()->back()->with('success', 'Absen Telah Di Tolak');
	}
}
