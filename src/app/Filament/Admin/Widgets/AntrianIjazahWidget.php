<?php

namespace App\Filament\Admin\Widgets;

use App\Models\AntrianIjazah;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AntrianIjazahWidget extends StatsOverviewWidget
{
    protected ?string $heading = 'Statistik Antrian Ijazah';

    protected function getCards(): array
    {
        $totalAntrian = AntrianIjazah::count();
        $antrianMenunggu = AntrianIjazah::where('status', 'menunggu')->count();
        $antrianSelesai = AntrianIjazah::where('status', 'selesai')->count();

        return [
            Card::make('Total Antrian', $totalAntrian)
                ->description('Jumlah semua data antrian')
                ->color('primary'),

            Card::make('Antrian Menunggu', $antrianMenunggu)
                ->description('Antrian yang sedang menunggu')
                ->color('warning'),

            Card::make('Antrian Selesai', $antrianSelesai)
                ->description('Antrian yang sudah selesai')
                ->color('success'),
        ];
    }
}
