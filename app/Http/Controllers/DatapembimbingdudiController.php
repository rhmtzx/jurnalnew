<?php

namespace App\Http\Controllers;
use App\Models\Datapembimbingdudi;
use Illuminate\Http\Request;

class DatapembimbingdudiController extends Controller
{
    public function index(){

        $data = Datapembimbingdudi::all();
        return view('pembimbingdudi.pembimbingdudi',compact('data'));
    }

    public function tambahpembimbingdudi(){
        return view('pembimbingdudi.tambahpembimbingdudi');
    }

    public function insertpembimbingdudi(Request $request){

            $this->validate($request,[
                  'foto' => 'required',
                  'namapemdudi' => 'required',
                  'alamatpemdudi' => 'required',
                  'notlppemdudi' => 'required',
                  'id_siswa' => 'required',
                  'id_dudi' => 'required',

             ],[
                 'foto.required' => 'Harus diisi',
                 'namapemdudi.required' => 'Harus diisi',
                 'alamatpemdudi.required' => 'Harus diisi',
                 'notlppemdudi.required' => 'Harus diisi',
                 'id_siswa.required' => 'Harus diisi',
                 'id_dudi.required' => 'Harus diisi',
 
             ]);

            $data = Datapembimbingdudi::create([
                'foto' =>$request->foto,
                'namapemdudi' =>$request->namapemdudi,
                'alamatpemdudi' =>$request->alamatpemdudi,
                'notlppemdudi' =>$request->notlppemdudi,
                'id_siswa' =>$request->id_siswa,
                'id_dudi' =>$request->id_dudi,

                
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('pembimbingdudi')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilpembimbingdudi($id){
            $data = Datapembimbingdudi::findOrfail($id);
            //dd($data);

            return view('pembimbingdudi.tampilpembimbingdudi', compact('data'));
        }

        public function updatepembimbingdudi(Request $request, $id){
            $data = Datapembimbingdudi::find($id);
            $data->update([
                'namapemdudi' =>$request->namapemdudi,
                'alamatpemdudi' =>$request->alamatpemdudi,
                'notlppemdudi' =>$request->notlppemdudi,
                'id_siswa' =>$request->id_siswa,
                'id_dudi' =>$request->id_dudi,
                
            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();

            }

            return redirect()->route('pembimbingdudi')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletepembimbingdudi($id){
            $data = Datapembimbingdudi::find($id);
            $data->delete();

            return redirect()->route('pembimbingdudi')->with('succes', 'Data Berhasil Di Delete');
        }
}
