<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tambahjurnal; 
use App\Models\dataabsen; 
use Carbon\Carbon;
use Redirect;
use Illuminate\Support\Collection;

use Illuminate\Support\Facades\DB;
use App\Models\User;


class ChartController extends Controller
{
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
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
            $datas[$months -1] = $users[$index];
        }

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

        //GRAFIK JURNAL DITERIMA
        $jdtrm = tambahjurnal::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Telah Disetujui')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = tambahjurnal::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $diterima = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($jdtrm) !=0)
            foreach ($months as $index => $months)
        {
            $diterima[$months -1] = $jdtrm[$index];
        }
        //GRAFIK JURNAL DITOLAK
        $y = tambahjurnal::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Jurnal Ditolak')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = tambahjurnal::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $ditolak = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($y) !=0)
            foreach ($months as $index => $months)
        {
            $ditolak[$months -1] = $y[$index];
        }
        //GRAFIK JURNAL MENUNGGU PERSETUJUAN
        $w = tambahjurnal::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Menunggu Persetujuan')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = tambahjurnal::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $menunggu = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($w) !=0)
            foreach ($months as $index => $months)
        {
            $menunggu[$months -1] = $w[$index];
        }

        //GRAFIK ABSEN DITERIMA
        $q = dataabsen::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Telah Disetujui')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = dataabsen::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $terimaabsen = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($q) !=0)
            foreach ($months as $index => $months)
        {
            $terimaabsen[$months -1] = $q[$index];
        }
        //GRAFIK ABSEN DITOLAK
        $r = dataabsen::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Absen Ditolak')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = dataabsen::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $tolakabsen = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($r) !=0)
            foreach ($months as $index => $months)
        {
            $tolakabsen[$months -1] = $r[$index];
        }
        //GRAFIK ABSEN MENUNGGU PERSETUJUAN
        $x = dataabsen::select(DB::raw("COUNT(*) as count"))->where('statusjurnal','Menunggu Persetujuan')
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        $months = dataabsen::select(DB::raw("Month(created_at) as months"))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('months');

        $menungguabsen = array(0,0,0,0,0,0,0,0,0,0,0,0);
        if (count($x) !=0)
            foreach ($months as $index => $months)
        {
            $menungguabsen[$months -1] = $x[$index];
        }
        
        

        return view('chart.chart', compact('datas','datass','datasss','diterima','ditolak','menunggu','terimaabsen','tolakabsen','menungguabsen'));
    }

    public function filter(Request $request) {

        $year = $request->get('year');

        $user = User::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', '=', $year)->get();

        $jurnal = tambahjurnal::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', '=', $year)->get();

        $absen = dataabsen::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', '=', $year)->get();

        return view('chart.chart',compact('user','jurnal','absen'));
    }




    // public function grafik()
    // {
    //     $statusjurnal = tambahjurnal::select(DB::raw("CAST(SUM(statusjurnal) as int) as statusjurnal"))
    //     ->GroupBy(DB::raw("Month(created_at)"))
    //     ->pluck('statusjurnal');

    //     // dd($statusjurnal);

    //     $bulan = tambahjurnal::select(DB::raw("MONTHNAME(created_at) as bulan"))
    //     ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    //     ->pluck('bulan');
    //     // dd($bulan);
    //     return view('chart.chart', compact('statusjurnal','bulan'));
    // }

    // public function highchartGrafik()
    // {
    //     $jurnal = \App\tambahjurnal::find($id);
    //     $statusjurnal = \App\tambahjurnal::all();

    //     $categories = [];
    //     foreach ($statusjurnal as $sj) {
    //         $categories[] = $sj->statusjurnal;
    //     }
    //     dd($categories);
    // }

    // public function index()
    // {
    // 	$users = User::select(DB::raw("COUNT(*) as count"))
    // 		->whereYear('created_at',date('Y'))
    // 		->groupBy(DB::raw("Month(created_at)"))
    // 		->pluck('count');
    // 	$months= User::select(DB::raw("Month(created_at) as month"))
    // 		->whereYear('created_at',date('Y'))
    // 		->groupBy(DB::raw("Month(created_at)"))
    // 		->pluck('month');

    // 	$datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    // 	foreach($months as $index => $month)
    // 	{
    // 		$datas[$month] = $users[$index];
    // 	}

    // 	return view('chart',compact('datas'));
    // }

    // public function barChart()
    // {
    // 	$users = User::select(DB::raw("COUNT(*) as count"))
    // 		->whereYear('created_at',date('Y'))
    // 		->groupBy(DB::raw("Month(created_at)"))
    // 		->pluck('count');
    // 	$months= User::select(DB::raw("Month(created_at) as month"))
    // 		->whereYear('created_at',date('Y'))
    // 		->groupBy(DB::raw("Month(created_at)"))
    // 		->pluck('month');

    // 	$datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    // 	foreach($months as $index => $month)
    // 	{
    // 		$datas[$month] = $users[$index];
    // 	}
    // 	return view('bar-chart',compact('datas'));
    // }



    // // ChartProject3Putri
    // public function googleLineChart()
    // {
    //     $visitor = Visitor::select(
    //                     DB::raw("day(created_at) as year"),
    //                     DB::raw("SUM(click) as total_click"),
    //                     DB::raw("SUM(viewer) as total_viewer"))
    //                 ->orderBy(DB::raw("YEAR(created_at)"))
    //                 ->groupBy(DB::raw("YEAR(created_at)"))
    //                 ->get();

    //     $result[] = ['Year','Click','Viewer'];
    //     foreach ($visitor as $key => $value) {
    //         $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
    //     }

    //     return view('google-line-chart')
    //             ->with('visitor',json_encode($result));
    // }


    // //Chart Mb Mei:v
    // //Fungsi Grafik
    // public function home()
    // {
    //     $dataUser = User::where('role','Siswa')->get();
    //     $dataJurnal = tambahjurnal::all();
    //     // $dataJurnal = tambahjurnal::all();
    //     $dataJurnalDiterima = tambahjurnal::where('statusjurnal','Telah Disetujui')->orWhere('statusjurnal','Jurnal Ditolak')->get();
    //     // $dataJurnalDiterima = tambahjurnal::where('statusjurnal','Telah Disetujui')->orWhere('statusjurnal','Jurnal Ditolak')->sum('gross_amount');

    //     // Pendaftaran Siswa -------------------------------------------------------------
    //     $newUser = User::where('role','Siswa')->select(DB::raw("COUNT(+) as newUser"), DB::raw("Month(created_at) as Month"))
    //     ->whereYear('created_at', date('Y'))
    //     ->orderBy('month','asc')
    //     ->groupBy(DB::raw("Month(created_at)"))
    //     ->pluck('newUser');

    //     $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))
    //     ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    //     ->pluck('bulan');

    //     $newUser = [0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ];

    //     foreach ($dataUser as $u) {
    //         $user = $newUser[Carbon::parse($u->created_at)->month-1];
    //         $newUser =[Carbon::parse($u->created_at)->month-1]=$user+1;
    //     }
    // }

    // //Fungsi Filter Grafik
    // // public function filter(Request $request)
    // // {
    // //     $year = $request->get('year');

    // //     $daftarUser = User::where('role','Siswa')
    // //     ->whereYear('created_at','=', $year)->get();

    // //     $jurnalDiterima = tambahjurnal::where('statusjurnal','Telah Diterima')->orWhere('statusjurnal','Jurnal Ditolak')->whereYear('created_at','=', $year)->get();

    // //     return view('admin.index',['daftarUser' => $daftarUser], ['jurnalDiterima' => $jurnalDiterima])
    // // }
    // public function filter(Request $request) {

    //     $year = $request->get('year');

    //     $daftarUser = User::where('role', 'Siswa')
    //     ->whereYear('created_at', '=', $year)->get();

    //     $tambahjurnal = tambahjurnal::where('statusjurnal', 'Telah Disetujui')->orWhere('statusjurnal', 'Jurnal Ditolak')
    //     ->whereYear('created_at', '=', $year)->get();

    //     $seluruhabsen = Payment::where('statusjurnal', 'Telah Disetujui')->orWhere('statusjurnal', 'Absen Ditolak')->sum('gross_amount')
    //     ->whereYear('created_at', '=', $year)->get();

    //     return view('admin.index', ['daftarUser' => $daftarUser], ['daftarPremium' => $daftarPremium], ['daftarPendapatan' => $daftarPendapatan]);
    // }

    // public function ajaxGraphic(Request $request) {

    //     $daftarUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    //     $daftarPremium = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    //     $daftarPendapatan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    //     $user = User::where('role', 1)->whereYear('created_at', $request->tahun)->get();
    //     foreach ($user as $u) {
    //         $jumlah = $daftarUser[Carbon::parse($u->created_at)->month - 1];
    //         $daftarUser[Carbon::parse($u->created_at)->month - 1] = $jumlah + 1;
        
    //     $data = [
    //         "user" => $daftarUser,
    //         "premium" => $daftarPremium,
    //         "pendapatan" => $daftarPendapatan,
    //     ];

    //     return $data;
    // }

    // COBA GOOGLE LINE CHART
}
