<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class datasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    //Mengambil dari model jurusan
	public function jurusan()
	{
		return $this->belongsTo(jurusan::class, 'namajurusan', 'id');
	}
	public function kelas()
	{
		return $this->belongsTo(kelas::class, 'kelassiswa', 'id');
	}
	public function plotingan()
    {
        return $this->hasMany(plotingan::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}