<?php

namespace App\Filament\Resources\Pasiens\Pages;

use App\Filament\Resources\Pasiens\PasienResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;


class CreatePasien extends CreateRecord
{
    protected static string $resource = PasienResource::class;

    protected function getRedirectUrl(): string
    {
        // Akan redirect ke halaman list pasien
        return $this->getResource()::getUrl('index');
    }
}
