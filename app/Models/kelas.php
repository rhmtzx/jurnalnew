<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->hasMany(user::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
    public function datasiswa()
    {
        return $this->hasMany(datasiswa::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
