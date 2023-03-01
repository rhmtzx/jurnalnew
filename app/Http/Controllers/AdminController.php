<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function beranda()
    {

        $dudi_total = User::where('role', Dudi)->get();
        $guru_total = User::where('role', Guru)->get();

        // Data Grafik Dudi ------------------------------------- //

        $newDudi = User::where('role', Dudi)->select(DB::raw("COUNT(*) as newDudi"), DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->orderBy('month', 'asc')
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('newDudi');

        $bulanDudi = User::select(DB::raw("MONTHNAME(created_at) as bulanDudi"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulanDudi');

        $newDudi = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($dudi_total as $pt) {
            $dudi = $newDudi[Carbon::parse($pt->created_at)->month - 1];
            $newDudi[Carbon::parse($pt->created_at)->month - 1] = $dudi + 1;
        }

        // Data Grafik Guru ------------------------------------- //

        $newGuru = User::where('role', Guru)->select(DB::raw("COUNT(*) as newGuru"), DB::raw("Month(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->orderBy('month', 'asc')
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('newGuru');

        $bulanGuru = User::select(DB::raw("MONTHNAME(created_at) as bulanGuru"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulanGuru');

        $newGuru = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($guru_total as $ft) {
            $guru = $newGuru[Carbon::parse($ft->created_at)->month - 1];
            $newGuru[Carbon::parse($ft->created_at)->month - 1] = $guru + 1;
        }

        return view('admin.beranda_admin', compact(
            'dudi_total',
            'guru_total',
            'newDudi',
            'bulanDudi',
            'newGuru',
            'bulanGuru'
        ));
    }

    public function filter(Request $request)
    {

        $year = $request->get('year');

        $daftarDudi = User::where('role', Dudi)
            ->whereYear('created_at', '=', $year)->get();

        $daftarGuru = User::where('role', Guru)
            ->whereYear('created_at', '=', $year)->get();

        return view('admin.beranda_admin', ['daftarDudi' => $daftarDudi], ['daftarGuru' => $daftarGuru]);
    }

    public function ajaxGraphic(Request $request)
    {

        $daftarDudi = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $daftarGuru = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $dudi = User::where('role', Dudi)->whereYear('created_at', $request->tahun)->get();
        foreach ($dudi as $p) {
            $jumlah = $daftarDudi[Carbon::parse($p->created_at)->month - 1];
            $daftarDudi[Carbon::parse($p->created_at)->month - 1] = $jumlah + 1;
        }

        $guru = User::where('role', Guru)->whereYear('created_at', $request->tahun)->get();
        foreach ($guru as $p) {
            $jumlah = $daftarGuru[Carbon::parse($p->created_at)->month - 1];
            $daftarGuru[Carbon::parse($p->created_at)->month - 1] = $jumlah + 1;
        }

        $data = [
            "dudi" => $daftarDudi,
            "guru" => $daftarGuru,
        ];

        return $data;
    }

    // public function tambahkategori(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'foto' => 'image|mimes:jpeg,png,jpg',
    //     ], [
    //         'nama.required' => 'Kategori tidak boleh kosong',

    //     ]);

    //     if ($request->file('icon')) {
    //         $foto = $request->file('icon');
    //         $lokasiFoto = 'assets/media/perusahaan/';
    //         $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
    //         $foto->move($lokasiFoto, $Foto);

    //         DB::table('kategoris')->insert([
    //             'nama' => $request->nama,
    //             'icon' => $Foto,
    //         ]);
    //     }

    //     // alert()->success('success','Kategori Berhasil Ditambahkan!');

    //     toast('Kategori Berhasil Ditambahkan', 'success');

    //     return redirect('admin/kategori')->with('success', 'Kategori Berhasil Ditambahkan');
    // }

    // public function kategori()
    // {
    //     $kategori = Kategori::all();
    //     return view('admin.kategori', compact('kategori'));
    // }

    // public function deletekategori($id)
    // {
    //     $kategori = Kategori::find($id)->delete();
    //     return redirect('admin/kategori');
    // }

    // perusahaan

    public function dudi()
    {
        $dudi = User::where('role', Dudi)->get();
        return view('admin.dudi', compact('dudi'));
    }


    // public function detail_perusahaan()
    // {
    //     return view('admin.detail_perusahaan');
    // }

    public function blokir_dudi($id)
    {
        $dudi = User::where('id', $id)->first();
        $status_blokir = $dudi->blokir;

        if ($status_blokir == 'blokir') {
            $dudi->update([

                'blokir' => null,
                'updated_at' => now(),
            ]);
        } else {
            $dudi->update([

                'blokir' => 'blokir',
                'updated_at' => now(),
            ]);
        }

        toast('Status berhasil diubah!!', 'success');
        return redirect('admin/perusahaan')->with('success', 'Status berhasil diubah!!');
    }
}
