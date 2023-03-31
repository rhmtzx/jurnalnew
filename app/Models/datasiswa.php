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
		return $this->belongsTo(jurusan::class, 'namajurusan', 'id');
	}

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
	public function kelass()
	{
		return $this->belongsTo(kelas::class, 'kelas', 'id');
	}

	public function plotingans()
    {
		return $this->hasMany(plotingan::class, 'namasiswa', 'id');
    }
	public function tambahjurnal()
    {
        return $this->hasMany(tambahjurnal::class,'id'); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
    public function dataabsen()
    {
        return $this->hasMany(dataabsen::class,'id');
    }
    public function user()
    {
        return $this->hasMany(user::class,'id');
    }
    public function absens()
    {
        return $this->hasMany(Absensi::class,);
    }

    public function dataplotingan()
    {
        return $this->hasMany(dataplotingan::class,);
    }
}
