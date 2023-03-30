<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plotsiswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function siswas()
    {
        return $this->belongsTo(datasiswa::class,'plotnamasiswa','id');
    }
    
    

}
    