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
                  'foto' => 'required',

             ],[
                 'nip.required' => 'Harus diisi',
                 'namaguru.required' => 'Harus diisi',
                 'alamat.required' => 'Harus diisi',
                 'notlpn.required' => 'Harus diisi',
                 'foto.required' => 'Harus diisi',

             ]);

            $data = dataguru::create([
                'nip' =>$request->nip,
                'namaguru' =>$request->namaguru,
                'alamat' =>$request->alamat,
                'notlpn' =>$request->notlpn,
                'foto' =>$request->foto,

            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            // dd($request->all);

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
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = hash_file('md5', $file->path()) . '.' . $file->getClientOriginalExtension();
                $file->move('fotodudi/', $filename);
                $data->foto = $filename;
                $data->save();
            }

            $data2->update([
                'name'=>$data->namaguru,
                // 'foto'=>$data->foto,
                'nip'=>$data->nip,
                'notlpn'=>$data->notlpn,
                'alamat'=>$data->alamat,


            ]);

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletedataguru(Request $request, $id){
            $data = dataguru::find($id);
            $data3=User::find($data->user_id);
            if (file_exists(public_path('fotodudi/' . $data3->foto))) {
            unlink(public_path('fotodudi/' . $data3->foto));
            }
            $data->delete();
            $data3->delete();

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Delete');
        }
}

