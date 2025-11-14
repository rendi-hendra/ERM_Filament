<?php

namespace App\Filament\Resources\Pasiens\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PasienForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nik')->length(16)->unique()->required(),
                TextInput::make('nama')->minLength(5)->required(),
                DatePicker::make('tanggal_lahir')->required(),
                Select::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])->required(),
                Textarea::make('alamat')->required(),
                TextInput::make('no_hp')->numeric()->minLength(10)
                    ->inputMode('decimal')->required(),
            ]);
    }
}
