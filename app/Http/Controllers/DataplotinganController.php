<?php

namespace App\Http\Controllers;
use App\Models\Dataplotingan;
use Illuminate\Http\Request;
use App\Models\dataguru;
use App\Models\datasiswa;
use App\Models\datadudi;

class DataplotinganController extends Controller
{
    public function index(){

            $data = dataplotingan::all();
            $guru = dataguru::all();
            $siswa = datasiswa::all();
            $dudi = datadudi::all();
        if(Auth()->user()->role == 'Admin'){


            return view('dataplotingan.dataplotingan',compact('data','guru','siswa','dudi'));
        }else{
            return view('user.dataplotingan.dataplotingan',compact('data'));
        }
    }
    public function tambahdataplotingan(){
            $data = dataplotingan::all();
            $guru = dataguru::all();
            $siswa = datasiswa::all();
            $dudi = datadudi::all();
        if(Auth()->user()->role == 'Admin'){
            return view('dataplotingan.tambahdataplotingan',compact('data','guru','siswa','dudi'));
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
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Ditambahkan');
            }else{
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Ditambahkan');
            }
        }
        public function tampildataplotingan($id){
            $data = dataplotingan::findOrfail($id);
            $guru = dataguru::all();
            $siswa = datasiswa::all();
            $dudi = datadudi::all();
            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('dataplotingan.tampildataplotingan',compact('data','guru','siswa','dudi'));
            }else{
                return view('user.dataplotingan.tampildataplotingan',compact('data'));
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
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Di Update');
            }else{
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Di Update');
            }
        }

        public function deletedataplotingan($id){
            $data = dataplotingan::find($id);
            $data->delete();
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Di Delete');
            }else{
                return redirect()->route('dataplotingan')->with('success', 'Data Berhasil Di Delete');
            }
        }
}
