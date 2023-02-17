<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class dataabsen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function namasiswa(){
        return $this->belongsTo(datasiswa::class, 'usersiswa', 'id');
    }

    public function jurusans()
	{
		return $this->belongsTo(jurusan::class, 'namajurusan', 'id');
	}

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
