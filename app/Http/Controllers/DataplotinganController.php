<?php

namespace App\Http\Controllers;
use App\Models\Dataplotingan;
use Illuminate\Http\Request;

class DataplotinganController extends Controller
{
    public function index(){

        $data = dataplotingan::all();
        return view('dataplotingan.dataplotingan',compact('data'));
    }
    public function tambahdataplotingan(){
        return view('dataplotingan.tambahdataplotingan');
    }

    public function insertdataplotingan(Request $request){

             $this->validate($request,[
                 'id_gurupem' => 'required',
                 'nissiswa' => 'required',
                 'id_dudi' => 'required',
             ],[
                 'id_gurupem.required' => 'Harus diisi',
                 'nissiswa.required' => 'Harus diisi',
                 'id_dudi.required' => 'Harus diisi',
             ]);

            $data = dataplotingan::create([
                'id_gurupem' =>$request->id_gurupem,
                'nissiswa' =>$request->nissiswa,
                'id_dudi' =>$request->id_dudi,
            ]);

            return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampildataplotingan($id){
            $data = dataplotingan::findOrfail($id);
            //dd($data);

            return view('dataplotingan.tampildataplotingan', compact('data'));
        }

        public function updatedataplotingan(Request $request, $id){
            $data = dataplotingan::find($id);
            $data->update([
                'id_gurupem' =>$request->id_gurupem,
                'nissiswa' =>$request->nissiswa,
                'id_dudi' =>$request->id_dudi,

            ]);
            return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedataplotingan($id){
            $data = dataplotingan::find($id);
            $data->delete();

            return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Delete');
        }
}