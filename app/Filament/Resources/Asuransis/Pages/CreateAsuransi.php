<?php

namespace App\Filament\Resources\Asuransis\Pages;

use App\Filament\Resources\Asuransis\AsuransiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAsuransi extends CreateRecord
{
    protected static string $resource = AsuransiResource::class;

    protected function getRedirectUrl(): string
    {
        // Akan redirect ke halaman list pasien
        return $this->getResource()::getUrl('index');
    }
}
