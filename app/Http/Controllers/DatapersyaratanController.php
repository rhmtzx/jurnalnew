<?php

namespace App\Http\Controllers;
use App\Models\datapersyaratan;
use Illuminate\Http\Request;

class DatapersyaratanController extends Controller
{
    public function index(){

        $data = datapersyaratan::all();
        return view('datapersyaratan.datapersyaratan',compact('data'));
    }

    public function tambahpersyaratan(){
        return view('datapersyaratan.tambahpersyaratan');
    }

    public function insertpersyaratan(Request $request){

            $this->validate($request,[
                  'deskripsi' => 'required',
                  'filepersyaratan' => 'required',
                  'id_dudi' => 'required',

             ],[
                 'deskripsi.required' => 'Harus diisi',
                 'filepersyaratan.required' => 'Harus diisi',
                 'id_dudi.required' => 'Harus diisi',
 
             ]);

            $data = datapersyaratan::create([
                'deskripsi' =>$request->deskripsi,
                'filepersyaratan' =>$request->filepersyaratan,
                'id_dudi' =>$request->id_dudi,

                
            ]);
            // dd($request->all);

            if($request->hasFile('filepersyaratan')){
                $request->file('filepersyaratan')->move('fotodudi/', $request->file('filepersyaratan')->getClientOriginalName());
                $data->filepersyaratan = $request->file('filepersyaratan')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilpersyaratan($id){
            $data = datapersyaratan::findOrfail($id);
            //dd($data);

            return view('datapersyaratan.tampilpersyaratan', compact('data'));
        }

        public function updatepersyaratan(Request $request, $id){
            $data = datapersyaratan::find($id);
            $data->update([
                'deskripsi' =>$request->deskripsi,
                'id_dudi' =>$request->id_dudi,
                
            ]);

            if($request->hasFile('filepersyaratan')){
                $request->file('filepersyaratan')->move('fotodudi/', $request->file('filepersyaratan')->getClientOriginalName());
                $data->filepersyaratan = $request->file('filepersyaratan')->getClientOriginalName();
                $data->save();

            }

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletepersyaratan($id){
            $data = datapersyaratan::find($id);
            $data->delete();

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Di Delete');
        }
}
