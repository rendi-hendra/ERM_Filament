<?php

namespace App\Filament\Resources\Pasiens\RelationManagers;

use App\Models\Pasien;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use App\Models\AsuransiPasien;
use Filament\Actions\EditAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Actions\DissociateBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;
use App\Filament\Resources\Pasiens\PasienResource;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class AsuransiPasienRelationManager extends RelationManager
{
    protected static string $relationship = 'asuransiPasien';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no_kartu')
                    ->required()
                    ->maxLength(255),
                Select::make('asuransi_id')
                    ->relationship('asuransi', 'nama_asuransi')
                    ->required(),
                Select::make('aktif')
                    ->options([
                        1 => 'Aktif',
                        0 => 'Tidak Aktif',
                    ])->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('pasien_id')
            ->columns([
                TextColumn::make('no_kartu')->label('No. Kartu')->sortable()
                    ->searchable(),
                TextColumn::make('asuransi.nama_asuransi')->label('Nama Asuransi')->sortable()
                    ->searchable(),
                IconColumn::make('aktif')->label('Status')->boolean()
            ])
            ->filters([
                // TrashedFilter::make(),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->modifyQueryUsing(fn(Builder $query) => $query
                ->withoutGlobalScopes([
                    SoftDeletingScope::class,
                ]));
    }
}
