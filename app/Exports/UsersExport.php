<?php

namespace App\Exports;

use App\Models\tambahjurnal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return tambahjurnal::with('namasiswa')->where('student_id', auth()->id())->
        select('judul','deskripsi','foto','usersiswa','statusjurnal','created_at')->get();
    }
    public function headings(): array
    {
        return [
            'Judul',
            'Deskripsi',
            'Foto',
            'Nama Siswa',
            'Status Jurnal',
            'Dibuat',
        ];
    }
}

