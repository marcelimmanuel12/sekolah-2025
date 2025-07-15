<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RiwayatKelasResource\Pages;
use App\Models\RiwayatKelas;
use App\Models\Murid;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RiwayatKelasResource extends Resource
{
    protected static ?string $model = RiwayatKelas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('murid_id')
                    ->label('Murid')
                    ->options(fn () => Murid::pluck('nama', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('kelas')
                    ->label('Kelas')
                    ->required()
                    ->maxLength(10),
                DatePicker::make('tanggal_naik_kelas')
                    ->label('Tanggal Naik Kelas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('murid.nama')
                    ->label('Murid')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas')->sortable(),
                Tables\Columns\TextColumn::make('tanggal_naik_kelas')->date()->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRiwayatKelas::route('/'),
            'create' => Pages\CreateRiwayatKelas::route('/create'),
            'edit' => Pages\EditRiwayatKelas::route('/{record}/edit'),
        ];
    }
}