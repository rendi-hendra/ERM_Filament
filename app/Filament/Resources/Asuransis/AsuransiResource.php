<?php

namespace App\Filament\Resources\Asuransis;

use BackedEnum;
use App\Models\Asuransi;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Asuransis\Pages\EditAsuransi;
use App\Filament\Resources\Asuransis\Pages\ListAsuransis;
use App\Filament\Resources\Asuransis\Pages\CreateAsuransi;
use App\Filament\Resources\Asuransis\Schemas\AsuransiForm;
use App\Filament\Resources\Asuransis\Tables\AsuransisTable;

class AsuransiResource extends Resource
{
    protected static ?string $model = Asuransi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Asuransi';

    public static function form(Schema $schema): Schema
    {
        return AsuransiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AsuransisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Asuransi';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAsuransis::route('/'),
            'create' => CreateAsuransi::route('/create'),
            'edit' => EditAsuransi::route('/{record}/edit'),
        ];
    }
}
