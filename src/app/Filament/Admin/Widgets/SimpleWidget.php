<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Nilai;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class SimpleWidget extends StatsOverviewWidget
{
    protected ?string $heading = 'Statistik Nilai';

    protected function getCards(): array
    {
        $totalData = Nilai::count();

        $avgMatematika = Nilai::all()
            ->pluck('nilai_mapel')
            ->map(fn ($mapel) => $mapel['Matematika'] ?? 0)
            ->avg();

        $avgBahasaIndonesia = Nilai::all()
            ->pluck('nilai_mapel')
            ->map(fn ($mapel) => $mapel['Bahasa Indonesia'] ?? 0)
            ->avg();

        $avgIPA = Nilai::all()
            ->pluck('nilai_mapel')
            ->map(fn ($mapel) => $mapel['IPA'] ?? 0)
            ->avg();

        return [
            Card::make('Jumlah Data Nilai', $totalData)
                ->description('Total data di tabel nilai')
                ->color('primary'),

            Card::make('Rata-rata Matematika', number_format($avgMatematika, 2))
                ->description('Diambil dari field nilai_mapel')
                ->color('success'),

            Card::make('Rata-rata Bahasa Indonesia', number_format($avgBahasaIndonesia, 2))
                ->description('Diambil dari field nilai_mapel')
                ->color('success'),

            Card::make('Rata-rata IPA', number_format($avgIPA, 2))
                ->description('Diambil dari field nilai_mapel')
                ->color('success'),
        ];
    }
}
