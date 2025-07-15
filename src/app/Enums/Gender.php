<?php

namespace App\Enums;

enum Gender: string
{
    case LAKI_LAKI = 'Laki-laki';
    case PEREMPUAN = 'Perempuan';

    public function label(): string
    {
        return match ($this) {
            self::LAKI_LAKI => 'Laki-laki',
            self::PEREMPUAN => 'Perempuan',
        };
    }

    public static function labels(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($case) => [$case->value => $case->label()])
            ->toArray();
    }
}
