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
	public function jurusans()
	{
		return $this->belongsTo(jurusan::class, 'jurusan', 'id');
	}
	public function kelass()
	{
		return $this->belongsTo(kelas::class, 'kelas', 'id');
	}
	public function plotingans()
    {
		return $this->belongsTo(plotingan::class, 'namasiswa', 'id');
    }
	public function tambahjurnal()
    {
        return $this->hasMany(tambahjurnal::class,); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
