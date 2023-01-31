<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class datadudi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->hasMany(user::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }

    public function plotingan()
    {
        return $this->hasMany(plotingan::class,'namadudi' ,'id'); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
