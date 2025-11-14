<?php

namespace App\Filament\Resources\Pasiens\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Pasiens\PasienResource;
use App\Models\Pasien;

class PasiensTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nik')->label('NIK')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('tanggal_lahir')->label('Tanggal Lahir')->date()->sortable(),
                TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')->sortable(),
                TextColumn::make('alamat')->sortable()->searchable(),
                TextColumn::make('no_hp')->label('No. HP')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // EditAction::make(),
                ActionGroup::make([
                    Action::make('edit')
                        ->url(fn(Pasien $record): string => PasienResource::getUrl('edit', ['record' => $record])),

                    Action::make('delete')
                        ->requiresConfirmation()
                        ->action(fn(Pasien $record) => $record->delete())
                ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
