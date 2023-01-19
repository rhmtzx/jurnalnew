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
                  'namadatapembimbing' => 'required',
                  'alamatdudi' => 'required',
                  'emaildudi' => 'required',
                  'persyaratan' => 'required',
                  'slotdudi' => 'required',

             ],[
                 'namadudi.required' => 'Harus diisi',
                 'namakepdik.required' => 'Harus diisi',
                 'namadatapembimbing.required' => 'Harus diisi',
                 'alamatemail.required' => 'Harus diisi',
                 'emaildudi.required' => 'Harus diisi',
                 'persyaratan.required' => 'Harus diisi',
                 'slotdudi.required' => 'Harus diisi',
             ]);

            $data = datadudi::create([
                'namadudi' =>$request->namadudi,
                'namakepdik' =>$request->namakepdik,
                'namadatapembimbing' =>$request->namadatapembimbing,
                'alamatdudi' =>$request->alamatdudi,
                'emaildudi' =>$request->emaildudi,
                'persyaratan' =>$request->persyaratan,
                'foto' =>$request->foto,
                'slotdudi' =>$request->slotdudi,
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datadudi')->with('succes', 'Data Berhasil Ditambahkan');
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
                'namadatapembimbing' =>$request->namadatapembimbing,
                'alamatdudi' =>$request->alamatdudi,
                'emaildudi' =>$request->emaildudi,
                'persyaratan' =>$request->persyaratan,
                'slotdudi' =>$request->slotdudi,
                
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('datadudi')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedatadudi($id){
            $data = datadudi::find($id);
            $data->delete();

            return redirect()->route('datadudi')->with('succes', 'Data Berhasil Di Delete');
        }
}
