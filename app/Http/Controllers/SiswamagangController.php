<?php

namespace App\Http\Controllers;
use App\Models\siswamagang;
use Illuminate\Http\Request;

class SiswamagangController extends Controller
{
    public function siswamagang(){

        $data = siswamagang::all();
        return view('siswamagang.siswamagang',compact('data'));
    }
    public function tambahsiswamagang(){
        return view('siswamagang.tambahsiswamagang');
    }

    public function insertsiswamagang(Request $request){

             $this->validate($request,[
                 'id_siswasm' => 'required',
                 'id_dudism' => 'required',
             ],[
                 'id_siswasm.required' => 'Harus diisi',
                 'id_dudism.required' => 'Harus diisi',
             ]);

            $data = siswamagang::create([
				'id_siswasm' =>$request->id_siswasm,
                'id_dudism' =>$request->id_dudism,            
            ]);

            return redirect()->route('siswamagang')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilsiswamagang($id){
            $data = siswamagang::findOrfail($id);
            //dd($data);

            return view('siswamagang.tampilsiswamagang', compact('data'));
        }

        public function updatesiswamagang(Request $request, $id){
            $data = siswamagang::find($id);
            $data->update([
                'id_siswasm' =>$request->id_siswasm,
                'id_dudism' =>$request->id_dudism,
            ]);
            return redirect()->route('siswamagang')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletesiswamagang($id){
            $data = siswamagang::find($id);
            $data->delete();

            return redirect()->route('siswamagang')->with('succes', 'Data Berhasil Di Delete');
        }
}
