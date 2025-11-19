<?php

namespace App\Filament\Resources\Kunjungans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KunjungansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pasien.nama')->searchable(),
                TextColumn::make('tanggal_kunjungan')->label('Tanggal Kunjungan'),
                TextColumn::make('keluhan'),
                TextColumn::make('dokter.nama')->searchable(),
                TextColumn::make('metode_pembayaran')->label('Metode Pembayaran'),
                TextColumn::make('asuransi.nama_asuransi')->default('-')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
