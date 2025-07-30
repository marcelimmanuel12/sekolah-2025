<?php

namespace Database\Seeders;

use App\Models\AntrianIjazah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AntrianIjazahSeeder extends Seeder
{
    public function run(): void
    {
        AntrianIjazah::insert([
            [
                'nama_murid' => 'Marcel Immanuell',
                'email_murid' => 'marcel@example.com',
                'tanggal_antri' => Carbon::now()->subDays(3),
                'status' => 'selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Siti Aminah',
                'email_murid' => 'siti@example.com',
                'tanggal_antri' => Carbon::now()->subDays(2),
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_murid' => 'Anton Budi',
                'email_murid' => 'anton@example.com',
                'tanggal_antri' => Carbon::now()->subDay(),
                'status' => 'menunggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
