<?php

namespace App\Filament\Resources\Asuransis\Pages;

use App\Filament\Resources\Asuransis\AsuransiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAsuransis extends ListRecords
{
    protected static string $resource = AsuransiResource::class;

    protected static ?string $clusterBreadcrumb = 'cluster';

    protected static ?string $title = 'Asuransi';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
