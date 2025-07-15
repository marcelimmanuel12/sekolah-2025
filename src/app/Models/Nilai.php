<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'nama_murid',
        'kelas',
        'nilai_mapel',
    ];

    protected $casts = [
        'nilai_mapel' => 'array', 
    ];
}
