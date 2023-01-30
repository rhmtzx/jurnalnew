<?php

namespace App\Http\Controllers;

use App\Models\datadudi;
use Illuminate\Http\Request;

class DatadudiController extends Controller
{
    public function index(){

        $data = datadudi::all();
        return view('datadudi.datadudi',compact('data'));
    }

    public function tambahdatadudi(){
        return view('datadudi.tambahdudi');
    }

    public function insertdatadudi(Request $request){

            $this->validate($request,[
                  'namadudi' => 'required',
                  'namakepdik' => 'required',
                  'alamatdudi' => 'required',
                  'foto' => 'required',
                 

             ],[
                 'namadudi.required' => 'Harus diisi',
                 'namakepdik.required' => 'Harus diisi',
                 'alamatdudi.required' => 'Harus diisi',
                 'foto.required' => 'Harus diisi',
                 
             ]);

            $data = datadudi::create([
                'namadudi' =>$request->namadudi,
                'namakepdik' =>$request->namakepdik,
                'alamatdudi' =>$request->alamatdudi,
                'foto' =>$request->foto,
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datadudi')->with('success', 'Data Berhasil Ditambahkan');
        }
        public function tampildatadudi($id){
            $data = datadudi::findOrfail($id);
            //dd($data);

            return view('datadudi.tampildudi', compact('data'));
        }

        public function updatedatadudi(Request $request, $id){
            $data = datadudi::find($id);
            $data->update([
                'namadudi' =>$request->namadudi,
                'namakepdik' =>$request->namakepdik,
                'alamatdudi' =>$request->alamatdudi,
                
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('datadudi')->with('success', 'Data Berhasil Di Update');
        }

        public function deletedatadudi($id){
            $data = datadudi::find($id);
            $data->delete();

            return redirect()->route('datadudi')->with('success', 'Data Berhasil Di Delete');
        }
}
