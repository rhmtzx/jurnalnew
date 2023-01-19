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

    public function tambahdatapersyaratan(){
        return view('datapersyaratan.tambahpersyaratan');
    }

    public function insertdatapersyaratan(Request $request){

            $this->validate($request,[
                  'deskripsi' => 'required',
                  'fotopersyaratan' => 'required',
                  'id_dudi' => 'required',

             ],[
                 'deskripsi.required' => 'Harus diisi',
                 'fotopersyaratan.required' => 'Harus diisi',
                 'id_dudi.required' => 'Harus diisi',
 
             ]);

            $data = datapersyaratan::create([
                'deskripsi' =>$request->deskripsi,
                'fotopersyaratan' =>$request->fotopersyaratan,
                'id_dudi' =>$request->id_dudi,

                
            ]);
            // dd($request->all);

            if($request->hasFile('fotopersyaratan')){
                $request->file('fotopersyaratan')->move('fotodudi/', $request->file('fotopersyaratan')->getClientOriginalName());
                $data->fotopersyaratan = $request->file('fotopersyaratan')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampildatapersyaratan($id){
            $data = datapersyaratan::findOrfail($id);
            //dd($data);

            return view('datapersyaratan.tampilpersyaratan', compact('data'));
        }

        public function updatedatapersyaratan(Request $request, $id){
            $data = datapersyaratan::find($id);
            $data->update([
                'deskripsi' =>$request->deskripsi,
                'id_dudi' =>$request->id_dudi,
                
            ]);

            if($request->hasFile('fotopersyaratan')){
                $request->file('fotopersyaratan')->move('fotodudi/', $request->file('fotopersyaratan')->getClientOriginalName());
                $data->fotopersyaratan = $request->file('fotopersyaratan')->getClientOriginalName();
                $data->save();

            }

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedatapersyaratan($id){
            $data = datapersyaratan::find($id);
            $data->delete();

            return redirect()->route('datapersyaratan')->with('succes', 'Data Berhasil Di Delete');
        }
}
