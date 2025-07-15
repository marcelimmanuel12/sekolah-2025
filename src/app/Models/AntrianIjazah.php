<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntrianIjazah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_murid',
        'email_murid',
        'tanggal_antri',
        'status',
    ];

    protected $casts = [
        'tanggal_antri' => 'datetime',
    ];
}
