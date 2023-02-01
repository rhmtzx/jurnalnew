<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\jurusan;
use App\Models\User;
use App\Models\datasiswa;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;

class DatasiswaController extends Controller
{
    public function index(){

        $data = datasiswa::all();
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        if(Auth()->user()->role == 'Admin'){
            return view('datasiswa.datasiswa',compact('data','jurusan','kelas'));
        }else{
            return view('user.datasiswa.datasiswa',compact('data','jurusan','kelas'));

        }
    }

    public function tambahdatasiswa(){
    $data = datasiswa::all();
    $jurusan = jurusan::all();
    $kelas = kelas::all();
        if(Auth()->user()->role == 'Admin'){
            return view('datasiswa.tambahsiswa', compact('data','jurusan','kelas'));
        }else{
            return view('user.datasiswa.tambahsiswa', compact('data','jurusan','kelas'));

        }
    }

    public function insertdatasiswa(Request $request){

            $this->validate($request,[
                  'nissiswa' => 'required',
                  'namasiswa' => 'required',
                  'kelas' => 'required',
                  'jurusan' => 'required',
                  'alamatsiswa' => 'required',
                  'notlpsiswa' => 'required',

             ],[
                 'nissiswa.required' => 'Harus diisi',
                 'namasiswa.required' => 'Harus diisi',
                 'kelas.required' => 'Harus diisi',
                 'jurusan.required' => 'Harus diisi',
                 'alamatsiswa.required' => 'Harus diisi',
                 'notlpsiswa.required' => 'Harus diisi',
             ]);

            $data = datasiswa::create([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
                'user_id' =>$request->nullable,

            ]);
            // dd($request->all);

            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
                if(Auth()->user()->role == 'Admin'){
                    return redirect()->route('datasiswa')->with('success', 'Data Berhasil Ditambahkan');
                }else{
                    return redirect()->route('datasiswa')->with('success', 'Data Berhasil Ditambahkan');
                }
        }
        public function tampildatasiswa($id){
            $data = datasiswa::findOrfail($id);
            $jurusan = jurusan::all();
            $kelas = kelas::all();

            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('datasiswa.tampilsiswa', compact('data','jurusan','kelas'));
            }else{
                return view('user.datasiswa.tampilsiswa', compact('data','jurusan','kelas'));
            }
        }

        public function updatedatasiswa(Request $request, $id){
            $data = datasiswa::find($id);
            $data2=User::find($data->user_id);
            $data->update([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
                // 'user_id' =>$request->nullable,
            ]);
            $data2->update([
                'name'=>$request->namasiswa
            ]);

            // datasiswa::where('user_id', $data->user_id)->update($data);
            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Update');
            }else{
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Update');
            }
        }

        public function deletedatasiswa(Request $request,$id){
            $data = datasiswa::find($id);
            $data3=User::find($data->user_id);
            $data->delete([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
            ]);
            $data3->delete([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
            ]);
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Delete');
            }
        }
}
