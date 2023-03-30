<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function namasiswa()
    {
        return $this->belongsTo(datasiswa::class, 'usersiswa', 'id');
    }

    public function user()
	{
    	return $this->belongsTo(User::class);
	}

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }

}
