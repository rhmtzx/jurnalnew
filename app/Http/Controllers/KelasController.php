<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use App\Models\kelas;
use App\Http\Controllers\Controller;



class KelasController extends Controller
{
    public function kelas(){

        $data = kelas::all();
        return view('kelas.datakelas',compact('data'));
    }
    public function tambahkelas(){
        return view('kelas.tambahkelas');
    }

    public function insertkelas(Request $request){

             $this->validate($request,[
                 'kelassiswa' => 'required|unique:kelas',

             ],[
                 'kelassiswa.unique' => 'Kelas Siswa Sudah Ada',
                 'kelassiswa.required' => 'Harus diisi',

             ]);

            $data = kelas::create([
                'kelassiswa' =>$request->kelassiswa,
            ]);

            return redirect()->route('datakelas')->with('success', 'Data Berhasil Ditambahkan');
        }
        public function tampilkelas($id){
            $data = kelas::findOrfail($id);
            //dd($data);

            return view('kelas.tampilkelas', compact('data'));
        }

        public function updatedatakelas(Request $request, $id){
            $data = kelas::find($id);
            $data->update([
                'kelassiswa' =>$request->kelassiswa,
            ]);
            return redirect()->route('datakelas')->with('success', 'Data Berhasil Di Update');
        }

        public function deletekelas($id){
            $data = kelas::find($id);
            $data->delete();

            return redirect()->route('datakelas')->with('success', 'Data Berhasil Di Delete');
        }
}
