<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AntrianIjazahResource\Pages;
use App\Models\AntrianIjazah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Radio;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AntrianIjazahResource extends Resource
{
    protected static ?string $model = AntrianIjazah::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?string $navigationLabel = 'Antrian Ijazah';
    protected static ?string $pluralModelLabel = 'Antrian Ijazah';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama_murid')
                ->label('Nama Murid')
                ->required()
                ->maxLength(255),

            TextInput::make('email_murid')
                ->label('Email Murid')
                ->email()
                ->nullable()
                ->maxLength(255),

            DateTimePicker::make('tanggal_antri')
                ->label('Tanggal Antri')
                ->required(),

            Radio::make('status')
                ->label('Status')
                ->options([
                    'menunggu' => 'Menunggu',
                    'selesai' => 'Selesai',
                ])
                ->default('menunggu')
                ->inline()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('nama_murid')->label('Nama Murid')->searchable(),
            Tables\Columns\TextColumn::make('email_murid')->label('Email Murid')->searchable(),
            Tables\Columns\TextColumn::make('tanggal_antri')->label('Tanggal Antri')->dateTime(),
            Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'warning' => 'menunggu',
                    'success' => 'selesai',
                ])
                ->sortable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAntrianIjazah::route('/'),
            'create' => Pages\CreateAntrianIjazah::route('/create'),
            'edit' => Pages\EditAntrianIjazah::route('/{record}/edit'),
        ];
    }
}
