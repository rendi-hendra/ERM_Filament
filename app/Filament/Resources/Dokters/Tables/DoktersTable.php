<?php

namespace App\Filament\Resources\Dokters\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class DoktersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_sip')->label('No. Sip')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make()
                ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
