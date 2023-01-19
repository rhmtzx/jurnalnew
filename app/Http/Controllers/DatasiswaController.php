<?php

namespace App\Http\Controllers;

use App\Models\datasiswa;
use App\Models\jurusan;

use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    public function index(){

        $data = datasiswa::all();
        return view('datasiswa.datasiswa',compact('data'));
    }

    public function tambahdatasiswa(){
    $data = datasiswa::all();
    $jurusan = jurusan::all();

        return view('datasiswa.tambahsiswa', compact('data','jurusan'));
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
                
            ]);
            // dd($request->all);

            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }

            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampildatasiswa($id){
            $data = datasiswa::findOrfail($id);
            $jurusan = jurusan::all();

            //dd($data);

            return view('datasiswa.tampilsiswa', compact('data','jurusan'));
        }

        public function updatedatasiswa(Request $request, $id){
            $data = datasiswa::find($id);
            $data->update([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
                
                
            ]);
            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedatasiswa($id){
            $data = datasiswa::find($id);
            $data->delete();

            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Di Delete');
        }
}
