<?php

namespace App\Filament\Resources\Asuransis\Tables;

use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\Asuransis\AsuransiResource;
use App\Models\Asuransi;

class AsuransisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_asuransi')->label('Nama Asuransi')->sortable()->searchable(),
                TextColumn::make('no_kontak')->label('No. Kontak')->sortable()->searchable(),
                TextColumn::make('alamat')->label('Alamat')->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                // EditAction::make(),
                ActionGroup::make([
                    Action::make('edit')
                        ->url(fn(Asuransi $record): string => AsuransiResource::getUrl('edit', ['record' => $record])),

                    Action::make('delete')
                        ->requiresConfirmation()
                        ->action(fn(Asuransi $record) => $record->delete())
                ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
