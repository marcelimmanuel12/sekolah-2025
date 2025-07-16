<?php

namespace App\Enums;

enum StatusMurid: string
{
    case AKTIF = 'Aktif';
    case TIDAK_AKTIF = 'Tidak Aktif';
    case LULUS = 'Lulus';

    public static function getOptions(): array
    {
        return [
            self::AKTIF->value => 'Aktif',
            self::TIDAK_AKTIF->value => 'Tidak Aktif',
            self::LULUS->value => 'Lulus',
        ];
    }
}
