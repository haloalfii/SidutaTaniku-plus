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
            'nama_kecamatan' => 'Temon'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Wates'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Panjatan'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Galur'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Lendah'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sentolo'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Pengasih'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kokap'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Girimulyo'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Nanggulan'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kalibawang'
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Samigaluh'
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
