<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class jurusan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    //Pusat Model Jurusan
    public function datasiswa()
    {
        return $this->hasMany(datasiswa::class,'namajurusan' ,'id'); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
