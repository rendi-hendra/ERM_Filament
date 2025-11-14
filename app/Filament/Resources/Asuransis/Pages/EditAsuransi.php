<?php

namespace App\Filament\Resources\Asuransis\Pages;

use App\Filament\Resources\Asuransis\AsuransiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAsuransi extends EditRecord
{
    protected static string $resource = AsuransiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Akan redirect ke halaman list pasien
        return $this->getResource()::getUrl('index');
    }
}
