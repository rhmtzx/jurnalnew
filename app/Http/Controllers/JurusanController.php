<?php

namespace App\Http\Controllers;

use view;
use App\Models\jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\datasiswa;
use toastr;

class JurusanController extends Controller
{
    public function index(){

        $data = jurusan::all();
        return view('jurusan.datajurusan',compact('data'));
    }
    public function tambahjurusan(){
        return view('jurusan.tambahjurusan');
    }

    public function insertjurusan(Request $request){

             $this->validate($request,[
                 'namajurusan' => 'required|unique:jurusans',
             ],[
                 'namajurusan.unique' => 'Nama Jurusan Sudah Ada',
                 'namajurusan.required' => 'Harus diisi',

             ]);

            $data = jurusan::create([
                'namajurusan' =>$request->namajurusan,
            ]);

            toastr()->success('Data Berhasil Ditambahkan!');
            return redirect()->route('datajurusan');
        }
        public function tampiljurusan($id){
            $data = jurusan::findOrfail($id);
            //dd($data);

            return view('jurusan.tampiljurusan', compact('data'));
        }

        public function updatedatajurusan(Request $request, $id){
            $data = jurusan::find($id);
            $data->update([
                'namajurusan' =>$request->namajurusan,
            ]);
            return redirect()->route('datajurusan')->with('success', 'Data Berhasil Di Update');
        }

        public function deletejurusan($id){
            $data = jurusan::find($id);
            $count = datasiswa::where('namajurusan', $id)->count();
            if($count > 0){
                return back()->with('error', 'Jurusan sedang digunakan');
            }
            $data->delete();

            return redirect()->route('datajurusan')->with('success', 'Data Berhasil Di Delete');
        }
}
