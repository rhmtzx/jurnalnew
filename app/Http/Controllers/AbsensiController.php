<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absensi;
use App\Models\tambahjurnal;
use App\Models\User;
use App\Models\datasiswa;
use App\Models\dataabsen;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AbsensiController extends Controller
{
	// ------------------------------ HALAMAN ABSEN SISWA -----------------------------------------------------
    public function absensiswa()
    {
        $absen = Absensi::with('namasiswa')->where('user_id', auth()->id())->get();

    	$setting = Setting::where('kd_dudi',Auth::user()->kd_dudi)->get();
    	$tittle = 'absensiswa';

    	return view('user.absensi.absensi',compact('absen','tittle','setting'));
    }
    //  -------------------------------- END HALAMAN ABSEN SISWA -----------------------------------------------

    // -------------------------- ABSEN MASUK NORMAL -----------------------------------------------------------
	public function absenmasuk(Request $request)
{
    $user = auth()->user();

    // Check if the user has already submitted attendance today
    if ($user->Absensi()->whereDate('created_at', now()->toDateString())->exists()) {
        return redirect('absensiswa')->with('error', 'Anda Sudah Absen Masuk Hari Ini !!');
    }

    // If user hasn't submitted attendance today, create a new attendance record
    $waktu = Setting::where('kd_dudi', $user->kd_dudi)->first();
    $masukTime = Carbon::parse($waktu->masuk, $waktu->timezone);

    $status = $masukTime->isBefore(now()) ? 'Terlambat' : 'Hadir';

    $siswa = Datasiswa::where('user_id', auth()->user()->id)->first();
if (!is_null($siswa)) {
    $usersiswa = $siswa->id;
    // ...
} else {
    // handle jika $siswa adalah null
}

    $absensi = new Absensi;
    $absensi->masuk = now();
    $absensi->keluar = null;
    $absensi->statusmasuk = $status;
    $absensi->statuskeluar = null;
    $absensi->usersiswa = $usersiswa;
    $absensi->user_id = $user->id;
    $absensi->kd_guru = $user->kd_guru;
    $absensi->kd_dudi = $user->kd_dudi;
    $absensi->id_jurusan = $user->id_jurusan;
    $absensi->save();

    return redirect('absensiswa')->with('success', 'Anda Sudah Absen Masuk Hari Ini !!');
}
	public function absenkeluar(Request $request)
{
    // Ambil data user yang sedang login
    $user = auth()->user();

    // Cari data Absensi user yang sedang login
    $absensi = $user->Absensi()->where('keluar', null)->first();

    // Jika data Absensi tidak ditemukan
    if (!$absensi) {
        return redirect('absensiswa')->with('error', 'Anda Belum Melakukan Absen Masuk!!');
    }

    // Cek apakah sudah waktunya untuk melakukan absen keluar
    $waktu = Setting::where('kd_dudi', $user->kd_dudi)->first();
    $keluarTime = Carbon::parse($waktu->keluar, $waktu->timezone);

    $status = $keluarTime->isBefore(now()) ? 'Telah Keluar' : 'Belum Waktunya';

    // Update data Absensi dengan waktu keluar dan status keluar
    $absensi->keluar = Carbon::now();
    $absensi->statuskeluar = $status;

    // Simpan perubahan ke dalam database
    $absensi->save();

    // Kirim respons dengan pesan sukses
    return redirect('absensiswa')->with('success', 'Anda Sudah Absen Keluar Hari Ini!!');
}
	// ---------------------------- END ABSEN MASUK NORMAL ------------------------------------------------------



	// ---------------------------- ABSEN MASUK SHIFT KEDUA -----------------------------------------------------
	public function absenmasukdua(Request $request)
{
    $user = auth()->user();

    // Check if the user has already submitted attendance today
    if ($user->Absensi()->whereDate('created_at', now()->toDateString())->exists()) {
        return redirect('absensiswa')->with('error', 'Anda Sudah Absen Masuk Hari Ini !!');
    }

    // If user hasn't submitted attendance today, create a new attendance record
    $waktu = Setting::where('kd_dudi', $user->kd_dudi)->first();
    $masukTime = Carbon::parse($waktu->masukk, $waktu->timezone);

    $status = $masukTime->isBefore(now()) ? 'Terlambat' : 'Hadir';

    $siswa = Datasiswa::where('user_id', auth()->user()->id)->first();
if (!is_null($siswa)) {
    $usersiswa = $siswa->id;
    // ...
} else {
    // handle jika $siswa adalah null
}

    $absensi = new Absensi;
    $absensi->masuk = now();
    $absensi->keluar = null;
    $absensi->statusmasuk = $status;
    $absensi->statuskeluar = null;
    $absensi->usersiswa = $usersiswa;
    $absensi->user_id = $user->id;
    $absensi->kd_guru = $user->kd_guru;
    $absensi->kd_dudi = $user->kd_dudi;
    $absensi->id_jurusan = $user->id_jurusan;
    $absensi->save();

    return redirect('absensiswa')->with('success', 'Anda Sudah Absen Masuk Hari Ini !!');
}

	public function absenkeluardua(Request $request)
{
    // Ambil data user yang sedang login
    $user = auth()->user();

    // Cari data Absensi user yang sedang login
    $absensi = $user->Absensi()->where('keluar', null)->first();

    // Jika data Absensi tidak ditemukan
    if (!$absensi) {
        return redirect('absensiswa')->with('error', 'Anda Belum Melakukan Absen Masuk!!');
    }

    // Cek apakah sudah waktunya untuk melakukan absen keluar
    $waktu = Setting::where('kd_dudi', $user->kd_dudi)->first();
    $keluarTime = Carbon::parse($waktu->keluar, $waktu->timezone);

    $status = $keluarTime->isBefore(now()) ? 'Telah Keluar' : 'Belum Waktunya';

    // Update data Absensi dengan waktu keluar dan status keluar
    $absensi->keluar = Carbon::now();
    $absensi->statuskeluar = $status;

    // Simpan perubahan ke dalam database
    $absensi->save();

    // Kirim respons dengan pesan sukses
    return redirect('absensiswa')->with('success', 'Anda Sudah Absen Keluar Hari Ini!!');
}
	// ----------------------------- END MASUK SHIFT KEDUA ------------------------------------------------------

	// Absen Nama Siswa For Dudi
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



	// Absen Nama Siswa For Guru
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
	public function absendayguru()
	{
		$kd_guru = auth()->user()->kd_guru;

    	$data = Absensi::where('kd_guru', $kd_guru)
                   ->whereDate('created_at', today())
                   ->get();

    	$data7 = Absensi::where('kd_guru', $kd_guru)
                    ->whereDate('created_at', Carbon::today())
                    ->get();

    	$guru = Absensi::with('namasiswa')
                   ->where('kd_guru', auth()->user()->kd_guru)
                   ->get();

		$tittle = 'teacherabsen';

		return view('userguru.absenharian.absenhariini',compact('data','data7','tittle'));
	}



	// Izin Hari Ini Dudi Dan Guru
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
    	$kd_guru = auth()->user()->kd_guru;
		$data7 = dataabsen::where('kd_guru', $kd_guru)
                    ->whereDate('created_at', Carbon::today())
                    ->get();

		return view('userguru.dataabsen.izinhariini',compact('data7','tittle'));
	}

	public function today()
	{
		$tittle = 'today';
		$today = Absensi::with('namasiswa')
                 ->whereHas('user', function ($query) {
                     $query->where('kd_dudi', auth()->user()->kd_dudi);
                 })
                 ->whereDate('created_at', Carbon::today())
                 ->get();
        // $todayjurnal = tambahjurnal::with('namasiswa')
        //          ->whereHas('user', function ($query) {
        //              $query->where('kd_dudi', auth()->user()->kd_dudi);
        //          })
        //          ->whereDate('created_at', Carbon::today())
        //          ->get();

// Mendapatkan ID siswa yang sedang login
$user_id = auth()->id();

// Mengambil data siswa berdasarkan user_id
$siswa = Datasiswa::where('user_id', $user_id)->first();

// Mengambil data jurnal siswa yang memiliki tanggal sama dengan hari ini
$jurnals = Tambahjurnal::where('usersiswa', $siswa->id)
            ->whereDate('created_at', now())
            ->get();
$izins = dataabsen::where('usersiswa', $siswa->id)
            ->whereDate('created_at', now())
            ->get();



        return view('user.absensi.today', compact('tittle','today','jurnals','izins'));
	}
}
