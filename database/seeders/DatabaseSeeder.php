<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\jurusan;
use App\Models\kelas;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $adminr2 = [
            [
                'name' => 'Admin Sekolah',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('adminsekolah'),
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminr2);

        
            }
}
