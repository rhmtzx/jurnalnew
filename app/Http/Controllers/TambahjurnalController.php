<?php

namespace App\Http\Controllers;

use App\Models\tambahjurnal;
use Illuminate\Http\Request;

class TambahjurnalController extends Controller
{
    public function index(){

        $data = tambahjurnal::all();
        return view('tambahjurnal.datatambahjurnal',compact('data'));
    }

    public function tambahtambahjurnal(){
        return view('tambahjurnal.tambahtambahjurnal');
    }

    public function inserttambahjurnal(Request $request){

            $this->validate($request,[
                  'judul' => 'required',
                  'deskripsi' => 'required',
                  'foto' => 'required',
                  'usersiswa' => 'required',

             ],[
                 'judul.required' => 'Harus diisi',
                 'deskripsi.required' => 'Harus diisi',
                 'foto.required' => 'Harus diisi',
                 'usersiswa.required' => 'Harus diisi',

             ]);

            $data = tambahjurnal::create([
                'judul' =>$request->judul,
                'deskripsi' =>$request->deskripsi,
                'foto' =>$request->foto,
                'usersiswa' =>$request->usersiswa,


            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampiltambahjurnal($id){
            $data = tambahjurnal::findOrfail($id);
            //dd($data);

            return view('tambahjurnal.tampiltambahjurnal', compact('data'));
        }

        public function updatetambahjurnal(Request $request, $id){
            $data = tambahjurnal::find($id);
            $data->update([
                'judul' =>$request->judul,
                'deskripsi' =>$request->deskripsi,
                'usersiswa' =>$request->usersiswa,

            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletetambahjurnal($id){
            $data = tambahjurnal::find($id);
            $data->delete();

            return redirect()->route('datatambahjurnal')->with('succes', 'Data Berhasil Di Delete');
        }
}
