<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\datadudi;
use App\Models\dataguru;
use App\Models\datasiswa;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach(range(1,100) as $index)
        // {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'password' => encrypt('password'),
        //         'created_at' => $faker->dateTimeBetween('-6 month','+1 month'),
        //         'role' => $faker->name,
        //     ]);
        // }

        //User Admin
        $adminsekul = [
            [
                'name' => 'Admin Sekolah',
                'email' => 'admin@gmail.com',
                'password' => Hash::make ('adminsekolah'),
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminsekul);
        //UserDudi
        $userdudi = [
            [
                'name' => 'Hummasoft Technology',
                'email' => 'hummasoft@gmail.com',
                'password' => Hash::make ('123456789'),
                'role' => 'Dudi',
                'kd_dudi' => '123456',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($userdudi);
        //UserGuru
        $userguru = [
            [
                'name' => 'Tri Gunanto Hadi',
                'email' => 'gunanto@gmail.com',
                'password' => Hash::make ('123456789'),
                'role' => 'Guru',
                'kd_guru' => '123456',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($userguru);
        

        $jurusan1 = [
            [
                'foto' => 'ka.png',
                'namajurusan' => 'XII KA 1'
            ]
        ];
        jurusan::insert($jurusan1);
        $jurusan2 = [
            [
                'foto' => 'ka.png',
                'namajurusan' => 'XII KA 2'
            ]
        ];
        jurusan::insert($jurusan2);
        $jurusan3 = [
            [
                'foto' => 'ki.png',
                'namajurusan' => 'XI KI 1'
            ]
        ];
        jurusan::insert($jurusan3);
        $jurusan4 = [
            [
                'foto' => 'ki.png',
                'namajurusan' => 'XI KI 2'
            ]
        ];
        jurusan::insert($jurusan4);
        $jurusan5 = [
            [
                'foto' => 'ki.png',
                'namajurusan' => 'XI KI 3'
            ]
        ];
        jurusan::insert($jurusan5);
        $jurusan6 = [
            [
                'foto' => 'rpl.png',
                'namajurusan' => 'XI RPL 1'
            ]
        ];
        jurusan::insert($jurusan6);
        $jurusan7 = [
            [
                'foto' => 'rpl.png',
                'namajurusan' => 'XI RPL 2'
            ]
        ];
        jurusan::insert($jurusan7);
        $jurusan8 = [
            [
                'foto' => 'tkj.png',
                'namajurusan' => 'XI TKJ 1'
            ]
        ];
        jurusan::insert($jurusan8);
        $jurusan9 = [
            [
                'foto' => 'tkj.png',
                'namajurusan' => 'XI TKJ 2'
            ]
        ];
        jurusan::insert($jurusan9);
        $jurusan10 = [
            [
                'foto' => 'tkj.png',
                'namajurusan' => 'XI TKJ 3'
            ]
        ];
        jurusan::insert($jurusan10);
        $jurusan11 = [
            [
                'foto' => 'mm.png',
                'namajurusan' => 'XI MM 1'
            ]
        ];
        jurusan::insert($jurusan11);
        $jurusan12 = [
            [
                'foto' => 'mm.png',
                'namajurusan' => 'XI MM 2'
            ]
        ];
        jurusan::insert($jurusan12);
        $jurusan13 = [
            [
                'foto' => 'mm.png',
                'namajurusan' => 'XI MM 3'
            ]
        ];
        jurusan::insert($jurusan13);
        $jurusan14 = [
            [
                'foto' => 'otkp.png',
                'namajurusan' => 'XI OTKP 1'
            ]
        ];
        jurusan::insert($jurusan14);
        $jurusan15 = [
            [
                'foto' => 'otkp.png',
                'namajurusan' => 'XI OTKP 2'
            ]
        ];
        jurusan::insert($jurusan15);
        $jurusan16 = [
            [
                'foto' => 'akl.png',
                'namajurusan' => 'XI AKL 1'
            ]
        ];
        jurusan::insert($jurusan16);
        $jurusan17 = [
            [
                'foto' => 'akl.png',
                'namajurusan' => 'XI AKL 2'
            ]
        ];
        jurusan::insert($jurusan17);
        $jurusan18 = [
            [
                'foto' => 'bdp.png',
                'namajurusan' => 'XI BDP 1'
            ]
        ];
        jurusan::insert($jurusan18);
        $jurusan19 = [
            [
                'foto' => 'bdp.png',
                'namajurusan' => 'XI BDP 2'
            ]
        ];
        jurusan::insert($jurusan19);

        // Seeder Dudi
        $dudiseed = [
            [
                'kd_dudi' => '123456',
                'foto' => 'default.png',
                'namadudi' => 'Hummasoft Technology',
                'namakepdik' => 'Afrizal Himawan',
                'alamatdudi' => 'Perumahan Griya Alam Blok.14',
                'notelepondudi' => '089679205044',
                'user_id' => '2',
            ],
        ];
        datadudi::insert($dudiseed);
        // Seeder Guru
        $guruseed = [
            [
                'kd_guru' => '123456',
                'nip' => '25071994',
                'namaguru' => 'Tri Gunanto Hadi',
                'alamat' => 'Jalan Pangeran diponegoro blok.12',
                'notlpn' => '089679205044',
                'user_id' => '3',
            ],
        ];
        dataguru::insert($guruseed);
        
    }

        
}
