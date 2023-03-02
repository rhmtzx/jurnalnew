<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\tambahjurnal; 
use App\Models\dataabsen; 
use Carbon\Carbon;
use Redirect;

class ChartController extends Controller
{
    public function index()
    {
    	$users = User::select(DB::raw("COUNT(*) as count"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(DB::raw("Month(created_at)"))
    		->pluck('count');
    	$months= User::select(DB::raw("Month(created_at) as month"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(DB::raw("Month(created_at)"))
    		->pluck('month');

    	$datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    	foreach($months as $index => $month)
    	{
    		$datas[$month] = $users[$index];
    	}

    	return view('chart',compact('datas'));
    }

    public function barChart()
    {
    	$users = User::select(DB::raw("COUNT(*) as count"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(DB::raw("Month(created_at)"))
    		->pluck('count');
    	$months= User::select(DB::raw("Month(created_at) as month"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(DB::raw("Month(created_at)"))
    		->pluck('month');

    	$datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
    	foreach($months as $index => $month)
    	{
    		$datas[$month] = $users[$index];
    	}
    	return view('bar-chart',compact('datas'));
    }



    // ChartProject3Putri
    public function googleLineChart()
    {
        $visitor = Visitor::select(
                        DB::raw("day(created_at) as year"),
                        DB::raw("SUM(click) as total_click"),
                        DB::raw("SUM(viewer) as total_viewer"))
                    ->orderBy(DB::raw("YEAR(created_at)"))
                    ->groupBy(DB::raw("YEAR(created_at)"))
                    ->get();

        $result[] = ['Year','Click','Viewer'];
        foreach ($visitor as $key => $value) {
            $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
        }

        return view('google-line-chart')
                ->with('visitor',json_encode($result));
    }


    //Chart Mb Mei:v
    //Fungsi Grafik
    public function home()
    {
        $dataUser = User::where('role','Siswa')->get();
        $dataJurnal = tambahjurnal::all();
        // $dataJurnal = tambahjurnal::all();
        $dataJurnalDiterima = tambahjurnal::where('statusjurnal','Telah Disetujui')->orWhere('statusjurnal','Jurnal Ditolak')->get();
        // $dataJurnalDiterima = tambahjurnal::where('statusjurnal','Telah Disetujui')->orWhere('statusjurnal','Jurnal Ditolak')->sum('gross_amount');

        // Pendaftaran Siswa -------------------------------------------------------------
        $newUser = User::where('role','Siswa')->select(DB::raw("COUNT(+) as newUser"), DB::raw("Month(created_at) as Month"))
        ->whereYear('created_at', date('Y'))
        ->orderBy('month','asc')
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('newUser');

        $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        $newUser = [0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ,0 ];

        foreach ($dataUser as $u) {
            $user = $newUser[Carbon::parse($u->created_at)->month-1];
            $newUser =[Carbon::parse($u->created_at)->month-1]=$user+1;
        }
    }

    //Fungsi Filter Grafik
    // public function filter(Request $request)
    // {
    //     $year = $request->get('year');

    //     $daftarUser = User::where('role','Siswa')
    //     ->whereYear('created_at','=', $year)->get();

    //     $jurnalDiterima = tambahjurnal::where('statusjurnal','Telah Diterima')->orWhere('statusjurnal','Jurnal Ditolak')->whereYear('created_at','=', $year)->get();

    //     return view('admin.index',['daftarUser' => $daftarUser], ['jurnalDiterima' => $jurnalDiterima])
    // }
    public function filter(Request $request) {

        $year = $request->get('year');

        $daftarUser = User::where('role', 'Siswa')
        ->whereYear('created_at', '=', $year)->get();

        $tambahjurnal = tambahjurnal::where('statusjurnal', 'Telah Disetujui')->orWhere('statusjurnal', 'Jurnal Ditolak')
        ->whereYear('created_at', '=', $year)->get();

        $seluruhabsen = Payment::where('statusjurnal', 'Telah Disetujui')->orWhere('statusjurnal', 'Absen Ditolak')->sum('gross_amount')
        ->whereYear('created_at', '=', $year)->get();

        return view('admin.index', ['daftarUser' => $daftarUser], ['daftarPremium' => $daftarPremium], ['daftarPendapatan' => $daftarPendapatan]);
    }

    public function ajaxGraphic(Request $request) {

        $daftarUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $daftarPremium = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $daftarPendapatan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $user = User::where('role', 1)->whereYear('created_at', $request->tahun)->get();
        foreach ($user as $u) {
            $jumlah = $daftarUser[Carbon::parse($u->created_at)->month - 1];
            $daftarUser[Carbon::parse($u->created_at)->month - 1] = $jumlah + 1;
        
        $data = [
            "user" => $daftarUser,
            "premium" => $daftarPremium,
            "pendapatan" => $daftarPendapatan,
        ];

        return $data;
    }

    // COBA GOOGLE LINE CHART
}
