<?php

namespace App\Http\Controllers;
use App\Models\Dataplotingan;
use Illuminate\Http\Request;

class DataplotinganController extends Controller
{
    public function index(){

        $data = dataplotingan::all();
        if(Auth()->user()->role == 'Admin'){

            return view('dataplotingan.dataplotingan',compact('data'));
        }else{
            return view('user.dataplotingan.dataplotingan',compact('data'));
        }
    }
    public function tambahdataplotingan(){
        if(Auth()->user()->role == 'Admin'){
            return view('dataplotingan.tambahdataplotingan');
        }else{
            return view('user.dataplotingan.tambahdataplotingan');
        }
    }

    public function insertdataplotingan(Request $request){

             $this->validate($request,[
                 'namagurup' => 'required',
                 'nissiswap' => 'required',
                 'namadudip' => 'required',
             ],[
                 'namagurup.required' => 'Harus diisi',
                 'nissiswap.required' => 'Harus diisi',
                 'namadudip.required' => 'Harus diisi',
             ]);

            $data = dataplotingan::create([
                'namagurup' =>$request->namagurup,
                'nissiswap' =>$request->nissiswap,
                'namadudip' =>$request->namadudip,
            ]);

            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Ditambahkan');
            }else{
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Ditambahkan');
            }
        }
        public function tampildataplotingan($id){
            $data = dataplotingan::findOrfail($id);
            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('dataplotingan.tampildataplotingan', compact('data'));
            }else{
                return view('user.dataplotingan.tampildataplotingan', compact('data'));
            }
        }

        public function updatedataplotingan(Request $request, $id){
            $data = dataplotingan::find($id);
            $data->update([
                'namagurup' =>$request->namagurup,
                'nissiswap' =>$request->nissiswap,
                'namadudip' =>$request->namadudip,

            ]);
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Update');
            }else{
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Update');
            }
        }

        public function deletedataplotingan($id){
            $data = dataplotingan::find($id);
            $data->delete();
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('dataplotingan')->with('succes', 'Data Berhasil Di Delete');
            }
        }
}
