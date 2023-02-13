<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dataguru;
use Illuminate\Http\Request;

class DataguruController extends Controller
{
    public function index(){

        $data = dataguru::all();
        return view('dataguru.dataguru',compact('data'));
    }

    public function tambahdataguru(){
        return view('dataguru.tambahguru');
    }

    public function insertdataguru(Request $request){

            $this->validate($request,[
                  'nip' => 'required',
                  'namaguru' => 'required',
                  'alamat' => 'required',
                  'notlpn' => 'required',
             ],[
                 'nip.required' => 'Harus diisi',
                 'namaguru.required' => 'Harus diisi',
                 'alamat.required' => 'Harus diisi',
                 'notlpn.required' => 'Harus diisi',
             ]);

            $data = dataguru::create([
                'nip' =>$request->nip,
                'namaguru' =>$request->namaguru,
                'alamat' =>$request->alamat,
                'notlpn' =>$request->notlpn,
            ]);
            // dd($request->all);

            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampildataguru($id){
            $data = dataguru::findOrfail($id);
            //dd($data);

            return view('dataguru.tampilguru', compact('data'));
        }

        public function updatedataguru(Request $request, $id){
            $data = dataguru::find($id);
            $data2=User::find($data->user_id);
            $data->update([
                'nip' =>$request->nip,
                'namaguru' =>$request->namaguru,
                'alamat' =>$request->alamat,
                'notlpn' =>$request->notlpn,

            ]);
            $data2->update([
                'name'=>$request->namaguru
            ]);
            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedataguru(Request $request, $id){
            $data = dataguru::find($id);
            $data3=User::find($data->user_id);
            $data->delete();
            $data3->delete();

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Delete');
        }
}

