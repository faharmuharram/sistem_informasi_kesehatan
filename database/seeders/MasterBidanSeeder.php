<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterBidanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Nuraini Supriatii', 'tgl-lahir' => 1980-03-29, 'alamat' => 'Jl. Merpati Buntu No.83', 'no_telp' => 085619875685, 'tgl_masuk' => 2023-09-29, 'gaji' => 5000000]
        ];

        DB::table('m_bidan')->insert($data);
    }
}