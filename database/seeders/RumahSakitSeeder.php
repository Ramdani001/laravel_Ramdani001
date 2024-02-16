<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_rumah_sakit')->insert(
            [
                'nama_rs' => "Santo Yusuf",
                'alamat' => "Jl. Kiaracondong",
                'telepon' => '02190026158'
            ]
        );
        DB::table('tabel_rumah_sakit')->insert(
            [
                'nama_rs' => "Kiara Sehat",
                'alamat' => "Jl. Soekarno Hata",
                'telepon' => '02289372609'
            ]
        );
        DB::table('tabel_rumah_sakit')->insert(
            [
                'nama_rs' => "Rumah Sehat Selalu",
                'alamat' => "Jl. Babakan",
                'telepon' => '02285726008'
            ]
        );
    }
}
