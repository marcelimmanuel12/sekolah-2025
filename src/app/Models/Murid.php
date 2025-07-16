<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\StatusMurid;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email_murid',
        'nisn',
        'jenis_kelamin',
        'kelas',
        'tanggal_lahir',
        'status',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public static function getStatusOptions()
    {
        return StatusMurid::getOptions();
    }

    public function getStatusLabelAttribute()
    {
        return self::getStatusOptions()[$this->status] ?? 'Tidak Diketahui';
    }
}
