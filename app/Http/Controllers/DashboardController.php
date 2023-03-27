<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tambahjurnal; 
use App\Models\dataabsen; 
use Carbon\Carbon;
use Redirect;
use Illuminate\Support\Collection;

use App\Models\jurusan; 
use App\Models\datasiswa; 
use App\Models\datadudi; 
use App\Models\dataguru; 
use App\Models\dataplotingan; 


use Illuminate\Support\Facades\DB;
use App\Models\User;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	//GRAFIK TOTAL USER
        $poke = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = User::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $months)
        {
            $datas[$months -1] = $poke[$index];
        }
        //GRAFIK TOTAL JURNAL
        $jurnal = tambahjurnal::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = tambahjurnal::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $datass = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $months)
        {
            $datass[$months -1] = $jurnal[$index];
        }
        //GRAFIK TOTAL ABSEN
        $Absen = dataabsen::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = dataabsen::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $datasss = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $months)
        {
            $datasss[$months -1] = $Absen[$index];
        }
        

    // D a s h b o a r d  A d m i n
    $jurusan = jurusan::count();
    $siswa = datasiswa::count();
    $dudi = datadudi::count();
    $jurnal = tambahjurnal::count();
    $plotingan = dataplotingan::count();
    $guru = dataguru::count();
    $absen = dataabsen::count();

        return view('welcome', compact('datas','datass','datasss','jurusan', 'siswa', 'dudi', 'jurnal','plotingan','guru','absen'));
    }
}
