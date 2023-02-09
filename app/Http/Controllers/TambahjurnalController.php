<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use App\Models\tambahjurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahjurnalController extends Controller
{
    public function index(){

        $data = tambahjurnal::with('namasiswa')->where('student_id', auth()->id())->get();
        $data3 = tambahjurnal::with('namasiswa')->get();
        $data2 = tambahjurnal::with('namasiswa')->where('kd_guru',auth()->user()->kd_guru)->get();
        $data4 = tambahjurnal::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();
        // dd($data2);
        if(Auth()->user()->role == 'Admin'){
            return view('tambahjurnal.datatambahjurnal',compact('data3'));
        }else{

            return view('user.tambahjurnal.datatambahjurnal',compact('data','data2','data4'));
        }
    }

    public function tambahtambahjurnal(){
        $data = datasiswa::where('namasiswa', Auth::user()->name)->get();
        if(Auth()->user()->role == 'Admin'){
            return view('tambahjurnal.tambahtambahjurnal',compact('data'));
        }else{
            return view('user.tambahjurnal.tambahtambahjurnal',compact('data'));
        }
    }

    public function inserttambahjurnal(Request $request){

            $this->validate($request,[
                  'judul' => 'required',
                  'deskripsi' => 'required',
                  'foto' => 'required',
                  'usersiswa' => 'required',
                  'statusjurnal' => 'required',

             ],[
                 'judul.required' => 'Harus diisi',
                 'deskripsi.required' => 'Harus diisi',
                 'foto.required' => 'Harus diisi',
                 'usersiswa.required' => 'Harus diisi',
                 'statusjurnal.required' => 'Harus diisi',

             ]);

            $data = tambahjurnal::create([
                'judul' =>$request->judul,
                'deskripsi' =>$request->deskripsi,
                'foto' =>$request->foto,
                'usersiswa' =>$request->usersiswa,
                'student_id' =>auth()->user()->id,
                'kd_guru'=>auth()->user()->kd_guru,
                'kd_dudi'=>auth()->user()->kd_dudi,
                'statusjurnal' =>$request->statusjurnal


            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            if(Auth()->user()->role == 'Admin'){
            return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Ditambahkan');
            }else{
            return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Ditambahkan');

            }
        }
        public function tampiltambahjurnal($id){
            $data = tambahjurnal::findOrfail($id);
            $datas = datasiswa::where('namasiswa', Auth::user()->name)->get();
            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('tambahjurnal.tampiltambahjurnal', compact('data','datas'));
            }else{
                return view('user.tambahjurnal.tampiltambahjurnal', compact('data','datas'));

            }
        }

        public function updatetambahjurnal(Request $request, $id){
            $data = tambahjurnal::find($id);
            $data->update([
                'judul' =>$request->judul,
                'deskripsi' =>$request->deskripsi,
                'usersiswa' =>$request->usersiswa,
                'statusjurnal' =>$request->statusjurnal,
                // 'foto' =>$request->foto,

            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('datatambahjurnal')->with('success', 'Data Berhasil Diupdate');
                }else{
                return redirect()->route('datatambahjurnal')->with('success', 'Data Berhasil Diupdate');

                }
        }

        public function deletetambahjurnal($id){
            $data = tambahjurnal::find($id);
            $data->delete();
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Di Delete');
            }
        }
}
