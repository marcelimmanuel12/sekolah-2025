<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_murid' => 'Marcel Immanuel',
                'kelas' => '7A',
                'nilai_mapel' => [
                    'Matematika' => 90,
                    'Bahasa Indonesia' => 85,
                    'IPA' => 88,
                ],
            ],
            [
                'nama_murid' => 'Siti Aminah',
                'kelas' => '7B',
                'nilai_mapel' => [
                    'Matematika' => 78,
                    'Bahasa Indonesia' => 90,
                    'IPA' => 82,
                ],
            ],
            [
                'nama_murid' => 'Anton Budi',
                'kelas' => '7B',
                'nilai_mapel' => [
                    'Matematika' => 88,
                    'Bahasa Indonesia' => 95,
                    'IPA' => 100,
                ],
            ],
        ];

        foreach ($data as $item) {
            Nilai::create($item);
        }
    }
}
