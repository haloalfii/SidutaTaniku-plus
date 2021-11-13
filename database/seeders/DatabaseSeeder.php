<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Komoditas;
use App\Models\Tahun;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kecamatan::create([
            'nama_kecamatan' => 'Temon',
            'luas_kecamatan' => 362909,
            'jumlah_desa' => 15,
            'jumlah_petani' => 300
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Wates',
            'luas_kecamatan' => 320024,
            'jumlah_desa' => 7,
            'jumlah_petani' => 200
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Panjatan',
            'luas_kecamatan' => 445923,
            'jumlah_desa' => 11,
            'jumlah_petani' => 240
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Galur',
            'luas_kecamatan' => 329123,
            'jumlah_desa' => 7,
            'jumlah_petani' => 250
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Lendah',
            'luas_kecamatan' => 329123,
            'jumlah_desa' => 6,
            'jumlah_petani' => 300
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sentolo',
            'luas_kecamatan' => 526534,
            'jumlah_desa' => 8,
            'jumlah_petani' => 400
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Pengasih',
            'luas_kecamatan' => 616647,
            'jumlah_desa' => 7,
            'jumlah_petani' => 300
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kokap',
            'luas_kecamatan' => 737995,
            'jumlah_desa' => 5,
            'jumlah_petani' => 200
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Girimulyo',
            'luas_kecamatan' => 548942,
            'jumlah_desa' => 4,
            'jumlah_petani' => 230
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Nanggulan',
            'luas_kecamatan' => 396067,
            'jumlah_desa' => 6,
            'jumlah_petani' => 200
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kalibawang',
            'luas_kecamatan' => 529637,
            'jumlah_desa' => 4,
            'jumlah_petani' => 120
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Samigaluh',
            'luas_kecamatan' => 692931,
            'jumlah_desa' => 7,
            'jumlah_petani' => 200
        ]);

        Komoditas::create([
            'nama_komoditas' => 'Jagung',
            'jenis_komoditas' => 'Tanaman Pangan'
        ]);
        Komoditas::create([
            'nama_komoditas' => 'Padi',
            'jenis_komoditas' => 'Tanaman Pangan'
        ]);

        Tahun::create([
            'tahun' => '2020'
        ]);

        Tahun::create([
            'tahun' => '2021'
        ]);
    }
}
