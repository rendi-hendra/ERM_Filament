<?php

namespace App\Filament\Resources\Asuransis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AsuransiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_asuransi')->required(),
                TextInput::make('no_kontak')->required(),
                Textarea::make('alamat')->required(),
            ]);
    }
}
