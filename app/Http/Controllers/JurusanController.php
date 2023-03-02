<?php

namespace App\Http\Controllers;

use view;
use App\Models\jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\datasiswa;
use Illuminate\Support\Facades\Schema;
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
                'foto' =>$request->foto,
            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datajurusan')->with('sukses', 'Data Berhasil Ditambahkan');


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
            toastr()->error('Data Masih Digunakan!');
            $count = datasiswa::where('namajurusan', $id)->count();
            if($count > 0){
                return back();
            }
            $data->delete();

            return redirect()->route('datajurusan')->with('success', 'Data Berhasil Di Delete');
        }

        public function deleteall()
        {
            Schema::disableForeignKeyConstraints();
            \App\Models\jurusan::truncate();
            Schema::enableForeignKeyConstraints();

            toastr()->success('Seluruh Data Berhasil Di Hapus');
            return redirect()->back()->with('success','Seluruh Data Berhasil Di Hapus');
        }
}
