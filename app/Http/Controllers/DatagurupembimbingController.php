<?php

namespace App\Http\Controllers;
use App\Models\datagurupembimbing;
use Illuminate\Http\Request;

class DatagurupembimbingController extends Controller
{
    public function index(){

        $data = datagurupembimbing::all();
        return view('datagurupembimbing.datagurupembimbing',compact('data'));
    }

    public function tambahgurupembimbing(){
        return view('datagurupembimbing.tambahgurupembimbing');
    }

    public function insertgurupembimbing(Request $request){

            $this->validate($request,[
                  'foto' => 'required',
                  'namagurupem' => 'required',
                  'alamatgurupem' => 'required',
                  'notlpgurupem' => 'required',
                  'id_dudi' => 'required',

             ],[
                 'foto.required' => 'Harus diisi',
                 'namagurupem.required' => 'Harus diisi',
                 'alamatgurupem.required' => 'Harus diisi',
                 'notlpgurupem.required' => 'Harus diisi',
                 'id_dudi.required' => 'Harus diisi',
 
             ]);

            $data = datagurupembimbing::create([
                'foto' =>$request->foto,
                'namagurupem' =>$request->namagurupem,
                'alamatgurupem' =>$request->alamatgurupem,
                'notlpgurupem' =>$request->notlpgurupem,
                'id_dudi' =>$request->id_dudi,

                
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datagurupembimbing')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilgurupembimbing($id){
            $data = datagurupembimbing::findOrfail($id);
            //dd($data);

            return view('datagurupembimbing.tampilgurupembimbing', compact('data'));
        }

        public function updategurupembimbing(Request $request, $id){
            $data = datagurupembimbing::find($id);
            $data->update([
                'namagurupem' =>$request->namagurupem,
                'alamatgurupem' =>$request->alamatgurupem,
                'notlpgurupem' =>$request->notlpgurupem,
                'id_dudi' =>$request->id_dudi,
                
            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();

            }

            return redirect()->route('datagurupembimbing')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletegurupembimbing($id){
            $data = datagurupembimbing::find($id);
            $data->delete();

            return redirect()->route('datagurupembimbing')->with('succes', 'Data Berhasil Di Delete');
        }
}
