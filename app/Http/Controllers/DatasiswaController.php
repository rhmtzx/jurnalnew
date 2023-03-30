<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Models\Absensi;
use App\Models\jurusan;
use App\Models\dataabsen;
use App\Models\datasiswa;
// use App\Models\Absensi;
use App\Models\tambahjurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use Illuminate\Foundation\Auth\User;

class DatasiswaController extends Controller
{
    public function index(Request $request){

        // $data = jurusan::paginate(1);
        $data2 = datasiswa::where('namasiswa', Auth::user()->name)->get();
        // $data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dudi)->get();
        // $data4 = dataabsen::with('namasiswa')->where('kd_dudi',auth()->user()->kd_dud)->get();
        $data3 = datasiswa::where('kd_guru', Auth::user()->kd_guru)->get();
        $data5 = datasiswa::where('kd_dudi', Auth::user()->kd_dudi)->get();
        $jurusan = jurusan::all();
        $tittle = 'datasiswa';
        // $keyword = $request->keyword;//
        // $datasearch = jurusan::where('namajurusan','LIKE','%'.$keyword.'%')->paginate(1);

        if(Auth()->user()->role == 'Admin'){
            if (isset($_GET['query'])) {
            $search = $_GET['query'];
            $data = jurusan::where('namajurusan', 'LIKE', '%' . $search . '%')->paginate(1);
            $data->appends($request->all());
        } else {
            $data = jurusan::paginate(4);
        }

        return view('datasiswa.datasiswa',compact('data','jurusan'));
            // return view('datasiswa.datasiswa',compact('jurusan','data1'));
        }else if(Auth()->user()->role == 'Guru'){
            return view('userguru.datasiswa.datasiswa',compact('data2','jurusan','data3','tittle'));
        }else if(Auth()->user()->role == 'Dudi'){
            return view('userdudi.datasiswa.datasiswa',compact('data2','jurusan','data5','tittle'));
        }else{
            return view('user.datasiswa.datasiswa',compact('data2','jurusan','data3','data5','tittle'));

        }
    }
    public function data($id){

        // $data = jurusan::where('namajurusan',$id)->get();
        $data = datasiswa::where('namajurusan',$id)->get();

        return view('datasiswa.data',compact('data'));
    }

    // public function jurusan(Request $request)
    // {
    //     $keyword = $request->keyword;
    //     $data1 = datasiswa::where('namajurusan','LIKE','%'.$keyword.'%')->paginate(4);
    //     // $berita = berita::all();
    //     return view('datasiswa.data', compact('data1'));
    // }

    // public function jurusan(Request $request)
    // {
    //     $jurusan = jurusan::query();

    //     $jurusan->when($request->namajurusan, function($query) use ($request){
    //         return $query->where('namajurusan','like','%'.$request->namajurusan.'%');
    //     });
    // }

    public function tambahdatasiswa(){
    $data = datasiswa::all();
    $jurusan = jurusan::all();
    $kelas = kelas::all();
        if(Auth()->user()->role == 'Admin'){
            return view('datasiswa.tambahsiswa', compact('data','jurusan','kelas'));
        }else{
            return view('user.datasiswa.tambahsiswa', compact('data','jurusan','kelas'));

        }
    }

    public function insertdatasiswa(Request $request){

            $this->validate($request,[
                  'nissiswa' => 'required',
                  'namasiswa' => 'required',
                  'kelas' => 'required',
                  'jurusan' => 'required',
                  'alamatsiswa' => 'required',
                  'notlpsiswa' => 'required',

             ],[
                 'nissiswa.required' => 'Harus diisi',
                 'namasiswa.required' => 'Harus diisi',
                 'kelas.required' => 'Harus diisi',
                 'jurusan.required' => 'Harus diisi',
                 'alamatsiswa.required' => 'Harus diisi',
                 'notlpsiswa.required' => 'Harus diisi',
             ]);

            $data = datasiswa::create([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'kelas' =>$request->kelas,
                'jurusan' =>$request->jurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
                'user_id' =>$request->nullable,

            ]);
            // dd($request->all);

            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
                if(Auth()->user()->role == 'Admin'){
                    return redirect()->route('datasiswa')->with('success', 'Data Berhasil Ditambahkan');
                }else{
                    return redirect()->route('datasiswa')->with('success', 'Data Berhasil Ditambahkan');
                }
        }
        public function tampildatasiswa($id){
            $data = datasiswa::findOrfail($id);
            $jurusan = jurusan::all();
            $kelas = kelas::all();

            //dd($data);
            if(Auth()->user()->role == 'Admin'){
                return view('datasiswa.tampilsiswa', compact('data','jurusan','kelas'));
            }else{
                return view('user.datasiswa.tampilsiswa', compact('data','jurusan','kelas'));
            }
        }

        public function updatedatasiswa(Request $request, $id){
            $data = datasiswa::find($id);
            $data2=User::find($data->user_id);
            $data->update([
                'nissiswa' =>$request->nissiswa,
                'namasiswa' =>$request->namasiswa,
                'namajurusan' =>$request->namajurusan,
                'alamatsiswa' =>$request->alamatsiswa,
                'notlpsiswa' =>$request->notlpsiswa,
                // 'user_id' =>$request->nullable,
            ]);
            $data2->update([
                'name'=>$request->namasiswa,
                'id_jurusan'=>$request->namajurusan
            ]);

            // datasiswa::where('user_id', $data->user_id)->update($data);
            // if($request->hasFile('foto')){
            //     $request->file('foto')->move('fotodudi/', $request->file('foto')->getClientOriginalName());
            //     $data->foto = $request->file('foto')->getClientOriginalName();
            //     $data->save();
            // }
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Update');
            }else{
                return redirect()->route('datasiswa')->with('success', 'Data Berhasil Di Update');
            }
        }

        public function deletedatasiswa(Request $request,$id){
            $data = datasiswa::findOrfail($id);
            $user = User::findOrfail($data->user_id);
            $jurnal = tambahjurnal::where('usersiswa', '=', $id);
            $absen = dataabsen::where('usersiswa', '=', $id);
            $Absensi = Absensi::where('usersiswa', '=', $id);

            $data->delete();
            $user->delete();
            $jurnal->delete();
            $absen->delete();
            $Absensi->delete();
            return back()->with('success', 'data berhasil di delete');
                }
}
