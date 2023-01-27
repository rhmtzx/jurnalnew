<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class dataplotingan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function dudi()
	{
		return $this->belongsTo(dudi::class, 'namadudi', 'id');
	}
	public function siswa()
	{
		return $this->belongsTo(siswa::class, 'namasiswa', 'id');
	}
	public function guru()
	{
		return $this->belongsTo(guru::class, 'namaguru', 'id');
	}
}
