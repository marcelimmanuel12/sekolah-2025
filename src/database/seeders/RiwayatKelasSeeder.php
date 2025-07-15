<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatKelas;

class RiwayatKelasSeeder extends Seeder
{
    public function run(): void
    {
        RiwayatKelas::create([
            'murid_id' => 1,  
            'kelas' => '7A',
            'tanggal_naik_kelas' => '2022-07-01',
        ]);
        RiwayatKelas::create([
            'murid_id' => 2,
            'kelas' => '7A',
            'tanggal_naik_kelas' => '2023-07-01',
        ]);

        RiwayatKelas::create([
            'murid_id' => 3,
            'kelas' => '7B',
            'tanggal_naik_kelas' => '2022-07-01',
        ]);
    }
}
