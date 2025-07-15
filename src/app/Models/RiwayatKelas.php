<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatKelas extends Model
{
    protected $table = 'riwayat_kelas';

    protected $fillable = [
        'murid_id',
        'kelas',
        'tanggal_naik_kelas',
    ];

    protected $casts = [
        'tanggal_naik_kelas' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relasi opsional, walaupun foreign key di DB tidak ada tetap bisa pakai ini buat query relasi
    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }
}