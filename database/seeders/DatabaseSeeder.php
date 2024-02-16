<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kecamatan::create([
            'nama_kecamatan' => 'Petang'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Abiansemal'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Mengwi'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kuta Utara'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kuta Selatan'
        ]);

        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Pelaga'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Belok Sidan'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Pangsan'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Petang'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Sulangai'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Getasan'
        ]);
        Desa::create([
            'id_kecamatan' => 1,
            'nama_desa' => 'Carangsari'
        ]);

        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Abiansemal'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Angantaka'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Ayunan'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Blahkiuh'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Bongkasa'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Bongkasa Pertiwi'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Abiansemal Dauh Yeh Cani'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Darmasaba'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Jagapati'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Mambal'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Mekar Buana'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Punggul'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Sangeh'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Sedang'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Selat'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Sibang Gede'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Sibang Kaja'
        ]);
        Desa::create([
            'id_kecamatan' => 2,
            'nama_desa' => 'Taman'
        ]);



        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Baha'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Gulingan'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Penarungan'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Werdi Bhuana'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Mengwi'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Sembung'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Kuwum'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Sobangan'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Mengwitani'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Kekeran'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Buduk'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Tumbak Bayuh'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Cemagi'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Munggu'
        ]);
        Desa::create([
            'id_kecamatan' => 3,
            'nama_desa' => 'Pererenan'
        ]);

        Desa::create([
            'id_kecamatan' => 4,
            'nama_desa' => 'Dalung'
        ]);
        Desa::create([
            'id_kecamatan' => 4,
            'nama_desa' => 'Canggu'
        ]);
        Desa::create([
            'id_kecamatan' => 4,
            'nama_desa' => 'Tibubeneng'
        ]);

        Desa::create([
            'id_kecamatan' => 5,
            'nama_desa' => 'Kutuh'
        ]);
        Desa::create([
            'id_kecamatan' => 5,
            'nama_desa' => 'Pecatu'
        ]);
        Desa::create([
            'id_kecamatan' => 5,
            'nama_desa' => 'Ungasan'
        ]);


        User::create([
            'role'=>'admin',
            'nama'=> 'admin',
            'username'=> 'admin',
            'password'=>'admin'
        ]);
        User::create([
            'role'=>'pegawai',
            'nama'=> 'dpmdppem',
            'username'=> 'dpmdppem',
            'password'=>'dpmdppem'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Pelaga',
            'username'=> 'Pelaga',
            'password'=>'Pelaga'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Belok Sidan',
            'username'=> 'Belok Sidan',
            'password'=>'Belok Sidan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Pangsan',
            'username'=> 'Pangsan',
            'password'=>'Pangsan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Petang',
            'username'=> 'Petang',
            'password'=>'Petang'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sulangai',
            'username'=> 'Sulangai',
            'password'=>'Sulangai'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Getasan',
            'username'=> 'Getasan',
            'password'=>'Getasan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Carangsari',
            'username'=> 'Carangsari',
            'password'=>'Carangsari'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Abiansemal',
            'username'=> 'Abiansemal',
            'password'=>'Abiansemal'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Angantaka',
            'username'=> 'Angantaka',
            'password'=>'Angantaka'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Ayunan',
            'username'=> 'Ayunan',
            'password'=>'Ayunan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Blahkiuh',
            'username'=> 'Blahkiuh',
            'password'=>'Blahkiuh'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Bongkasa',
            'username'=> 'Bongkasa',
            'password'=>'Bongkasa'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Bongkasa Pertiwi',
            'username'=> 'Bongkasa Pertiwi',
            'password'=>'Bongkasa Pertiwi'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Abiansemal Dauh Yeh Cani',
            'username'=> 'Abiansemal Dauh Yeh Cani',
            'password'=>'Abiansemal Dauh Yeh Cani'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Darmasaba',
            'username'=> 'Darmasaba',
            'password'=>'Darmasaba'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Jagapati',
            'username'=> 'Jagapati',
            'password'=>'Jagapati'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Mambal',
            'username'=> 'Mambal',
            'password'=>'Mambal'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Mekar Buana',
            'username'=> 'Mekar Buana',
            'password'=>'Mekar Buana'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Punggul',
            'username'=> 'Punggul',
            'password'=>'Punggul'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sangeh',
            'username'=> 'Sangeh',
            'password'=>'Sangeh'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sedang',
            'username'=> 'Sedang',
            'password'=>'Sedang'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Selat',
            'username'=> 'Selat',
            'password'=>'Selat'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sibang Gede',
            'username'=> 'Sibang Gede',
            'password'=>'Sibang Gede'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sibang Kaja',
            'username'=> 'Sibang Kaja',
            'password'=>'Sibang Kaja'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Taman',
            'username'=> 'Taman',
            'password'=>'Taman'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Baha',
            'username'=> 'Baha',
            'password'=>'Baha'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Gulingan',
            'username'=> 'Gulingan',
            'password'=>'Gulingan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Penarungan',
            'username'=> 'Penarungan',
            'password'=>'Penarungan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Werdi Bhuana',
            'username'=> 'Werdi Bhuana',
            'password'=>'Werdi Bhuana'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Mengwi',
            'username'=> 'Mengwi',
            'password'=>'Mengwi'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sembung',
            'username'=> 'Sembung',
            'password'=>'Sembung'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Kuwum',
            'username'=> 'Kuwum',
            'password'=>'Kuwum'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Sobangan',
            'username'=> 'Sobangan',
            'password'=>'Sobangan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Mengwitani',
            'username'=> 'Mengwitani',
            'password'=>'Mengwitani'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Kekeran',
            'username'=> 'Kekeran',
            'password'=>'Kekeran'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Buduk',
            'username'=> 'Buduk',
            'password'=>'Buduk'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Tumbak Bayuh',
            'username'=> 'Tumbak Bayuh',
            'password'=>'Tumbak Bayuh'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Cemagi',
            'username'=> 'Cemagi',
            'password'=>'Cemagi'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Munggu',
            'username'=> 'Munggu',
            'password'=>'Munggu'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Pererenan',
            'username'=> 'Pererenan',
            'password'=>'Pererenan'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Dalung',
            'username'=> 'Dalung',
            'password'=>'Dalung'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Canggu',
            'username'=> 'Canggu',
            'password'=>'Canggu'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Tibubeneng',
            'username'=> 'Tibubeneng',
            'password'=>'Tibubeneng'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Kutuh',
            'username'=> 'Kutuh',
            'password'=>'Kutuh'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Pecatu',
            'username'=> 'Pecatu',
            'password'=>'Pecatu'
        ]);
        User::create([
            'role'=>'desa',
            'nama'=> 'Ungasan',
            'username'=> 'Ungasan',
            'password'=>'Ungasan'
        ]);
    }
}
