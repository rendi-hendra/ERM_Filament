<?php

namespace App\Filament\Resources\Dokters\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DokterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no_sip')->label('No. Sip')->numeric()->unique()->required(),
                TextInput::make('nama')->required(),
            ]);
    }
}
