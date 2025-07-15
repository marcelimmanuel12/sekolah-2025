<?php

namespace Database\Seeders;

use App\Models\AntrianIjazah;
use App\Models\Murid;
use App\Models\RiwayatKelas;
use App\Models\User;
use App\Models\Nilai;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MuridsSeeder::class,
            AntrianIjazahSeeder::class,
            RiwayatKelasSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            NilaiSeeder::class,
        ]);
    }
}
