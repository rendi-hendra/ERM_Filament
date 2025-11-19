<?php

namespace App\Filament\Resources\Kunjungans\Pages;

use App\Filament\Resources\Kunjungans\KunjunganResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKunjungan extends EditRecord
{
    protected static string $resource = KunjunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
