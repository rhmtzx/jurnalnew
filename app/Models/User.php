<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Passwords\CanResetPassword;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'kd_guru',
        'kd_dudi',
        'id_jurusan',
        //dudi
        'namakepdik',
        'alamatdudi',
        'notelepondudi',
        'foto',
        //guru
        'nip',
        'alamat',
        'notlpn',
        //siswa
        'nissiswa',
        'alamatsiswa',
        'notlpsiswa',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelassiswa', 'id');
    }

    public function datadudi()
    {
        return $this->belongsTo(datadudi::class, 'alamatdudi','namakepdik', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan', 'id');
    }


}
