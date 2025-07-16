<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Murid;

class MuridsSeeder extends Seeder
{
    public function run(): void
    {
        Murid::create([
            'nama' => 'Marcel Immanuel',
            'email_murid' => 'marcel@example.com',
            'nisn' => '20240801117',
            'jenis_kelamin' => 'Laki-laki',
            'kelas' => '7A',
            'tanggal_lahir' => '2008-03-15',
            'status' => 'Aktif',
        ]);

        Murid::create([
            'nama' => 'Siti Aminah',
            'email_murid' => 'siti@example.com',
            'nisn' => '20240801119',
            'jenis_kelamin' => 'Perempuan',
            'kelas' => '7A',
            'tanggal_lahir' => '2008-05-10',
            'status' => 'Aktif',
        ]);

        Murid::create([
            'nama' => 'Anton Budi',
            'email_murid' => 'anton@example.com',
            'nisn' => '20240801120',
            'jenis_kelamin' => 'Laki-laki',
            'kelas' => '7A',
            'tanggal_lahir' => '2008-05-10',
            'status' => 'Aktif',
        ]);
    }
}
