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

    public function dudis()
	{
		return $this->belongsTo(datadudi::class, 'namadudip', 'id');
	}
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
	public function siswas()
	{
		return $this->belongsTo(datasiswa::class, 'namasiswap', 'id');
	}
	public function gurus()
	{
		return $this->belongsTo(dataguru::class, 'namagurup', 'id');
	}
}
