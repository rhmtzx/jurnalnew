<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absensi;
use App\Models\datasiswa;
use App\Models\dataabsen;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AbsensiController extends Controller
{
    public function absensiswa()
    {
    	// $absen = Absensi::with('datasiswas')->where('user_id', auth()->id())->get();
        $absen = Absensi::with('namasiswa')->where('user_id', auth()->id())->get();

    	$setting = Setting::where('kd_dudi',Auth::user()->kd_dudi)->get();
    	$tittle = 'absensiswa';

    	return view('user.absensi.absensi',compact('absen','tittle','setting'));
    }


public function absenmasuk(Request $request)
{
    // Check if the user has already submitted attendance today
    $existingAttendance = Absensi::where('user_id', auth()->user()->id)
        ->whereDate('created_at', Carbon::today())
        ->first();

    if ($existingAttendance) {
        return redirect('absensiswa')->with('error', 'Anda Sudah Absen Masuk Hari Ini !!');
    }

    // If user hasn't submitted attendance today, create a new attendance record
    $waktu = Setting::where('kd_dudi',auth()->user()->kd_dudi)->first();
    $status = 'Hadir';
    if(Carbon::now() > $waktu->masuk){
        $status = 'Terlambat';
    }

    $siswa = Datasiswa::where('user_id', auth()->user()->id)->first();
    $usersiswa = $siswa->id;

    $absensi = new Absensi;
    $absensi->masuk = Carbon::now();
    $absensi->keluar = null;
    $absensi->statusmasuk = $status;
    $absensi->statuskeluar = null;
    $absensi->usersiswa = $usersiswa;
    $absensi->user_id = auth()->user()->id;
    $absensi->kd_guru = auth()->user()->kd_guru;
    $absensi->kd_dudi = auth()->user()->kd_dudi;
    $absensi->id_jurusan = auth()->user()->id_jurusan;
    $absensi->save();

    return redirect('absensiswa')->with('success','Anda Sudah Absen Masuk Hari Ini !!');
}

 //    public function absenkeluar($id)
 //    {
 //    $waktu = Setting::where('kd_dudi',auth()->user()->kd_dudi)->first();
	// $status = 'Belum waktunya';
	// if(Carbon::now() > $waktu->keluar){
	// 	$status = 'Telah Keluar';
	// }
 //    	$data = Absensi::update([
 //    		'keluar' => Carbon::now(),
 //    		'statuskeluar' => $status,
 //    	]);
 //    }

 //    return redirect('absensiswa')->with('success','Anda Sudah Absen Keluar Hari Ini !!');

    public function absenkeluar(Request $request)
{
	$waktu = Setting::where('kd_dudi',auth()->user()->kd_dudi)->first();
	$status = 'Belum Waktunya';
	if(Carbon::now() < $waktu->keluar){
		$status = 'Telah Keluar';
	}
    // Ambil data user yang sedang login
    $user = auth()->user();

    // Ambil data Absensi user yang sedang login
    $absensi = Absensi::where('user_id', $user->id)
                      ->where('keluar', null)
                      ->first();

    // Cek apakah data Absensi ditemukan
    if (!$absensi) {
        return redirect('absensiswa')->with('error','Anda Belum Melakukan Absen Masuk !!');
    }

    // Update data Absensi dengan waktu keluar dan status keluar
    $absensi->keluar = Carbon::now();
    $absensi->statuskeluar = $status;

    // Simpan perubahan ke dalam database
    $absensi->save();

    // Kirim respons dengan pesan sukses
    return redirect('absensiswa')->with('success','Anda Sudah Absen Keluar Hari Ini !!');
	}


	// Absen Nama Siswa Dudi
	public function absendudi()
	{
        $tittle = 'iya';
        $dudi = datasiswa::where('kd_dudi', Auth::user()->kd_dudi)->get();

        return view('userdudi.absenharian.absenharian',compact('dudi','tittle'));
	}
	public function tampilabsendudi($id)
	{
        $data4 = Absensi::with('namasiswa')->where('usersiswa',$id)->get();

		// $data4 = Absensi::with('usersiswa')->where('usersiswa',$id)->get();
		$tittle = 'tampildudi';

		return view('userdudi.absenharian.absensdudi',compact('data4','tittle'));
	}
	public function absendaydudi()
	{
    $kd_dudi = auth()->user()->kd_dudi;

    $data = Absensi::where('kd_dudi', $kd_dudi)
                   ->whereDate('created_at', today())
                   ->get();

    $data7 = Absensi::where('kd_dudi', $kd_dudi)
                    ->whereDate('created_at', Carbon::today())
                    ->get();

    $guru = Absensi::with('namasiswa')
                   ->where('kd_guru', auth()->user()->kd_guru)
                   ->get();

    $tittle = 'dudiabsen';

    return view('userdudi.absenharian.absenhariini', compact('data', 'data7', 'tittle', 'guru'));
	}



	// Absen Nama Siswa Guru
	public function absenguru()
	{
		$tittle = 'leyselia';
		$guru = datasiswa::where('kd_guru', Auth::user()->kd_guru)->get();

		return view('userguru.absenharian.absenharian',compact('guru','tittle'));
	}
	public function tampilabsenguru($id)
	{
        $data4 = Absensi::with('namasiswa')->where('usersiswa',$id)->get();
		$tittle = 'leyselia2';

		return view('userguru.absenharian.absensguru',compact('data4','tittle'));
	}
	public function absendayteacher()
	{
		$data = Absensi::whereDate('created_at', today())->get();
		$data7 = Absensi::whereDate('created_at', Carbon::today())->get();

		$tittle = 'teacherabsen';

		return view('userguru.absenharian.absenhariini',compact('data','data7','tittle'));
	}


	public function izindaydudi()
	{

		$tittle = 'hehe';
    	$kd_dudi = auth()->user()->kd_dudi;
		$data7 = dataabsen::where('kd_dudi', $kd_dudi)
                    ->whereDate('created_at', Carbon::today())
                    ->get();

		return view('userdudi.dataabsen.izinhariini',compact('data7','tittle'));
	}

	public function izindayguru()
	{
		$tittle = 'haha';
    	$kd_dudi = auth()->user()->kd_dudi;
		$data7 = dataabsen::where('kd_guru', $kd_dudi)
                    ->whereDate('created_at', Carbon::today())
                    ->get();

		return view('userguru.dataabsen.izinhariini',compact('data7','tittle'));
	}
}
