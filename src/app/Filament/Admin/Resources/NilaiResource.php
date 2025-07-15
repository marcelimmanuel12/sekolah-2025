<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NilaiResource\Pages;
use App\Models\Nilai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\KeyValue;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $modelLabel = 'Data Nilai';
    protected static ?string $pluralModelLabel = 'Data Nilai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_murid')
                    ->label('Nama Murid')
                    ->required()
                    ->maxLength(100),

                TextInput::make('kelas')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(10),

                KeyValue::make('nilai_mapel')
                    ->label('Nilai Mapel')
                    ->keyLabel('Mata Pelajaran')
                    ->valueLabel('Nilai')
                    ->addButtonLabel('Tambah Mapel')
                    ->required()
                    ->reorderable()
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_murid')->label('Nama Murid')->searchable(),
                TextColumn::make('kelas')->label('Kelas')->searchable(),
                TextColumn::make('nilai_mapel')
                    ->label('Nilai Mapel')
                    ->formatStateUsing(function ($state) {
                        return collect($state)->map(fn ($nilai, $mapel) => "$mapel: $nilai")->implode(', ');
                    })
                    ->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
