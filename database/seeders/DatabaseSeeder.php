<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Desa;
use App\Models\Kecamatan;
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
    }
}
