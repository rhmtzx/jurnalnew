<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tambahjurnal extends Model
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

    public function update_status($judul, $statusjurnal)
    {
        $this->db->set('statusjurnal', $statusjurnal);
        $this->db->where('judul', $judul);
        $this->db->update('tambahjurnal');
    }

    public function jurnals()
    {
        return $this->hasMany(Jurnals::class);
    }
}
