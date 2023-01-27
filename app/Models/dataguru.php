<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class dataguru extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function plotingan()
    {
        return $this->hasMany(plotingan::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
