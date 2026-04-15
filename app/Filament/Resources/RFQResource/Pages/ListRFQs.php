<?php

namespace App\Filament\Resources\RFQResource\Pages;

use App\Filament\Resources\RFQResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListRFQs extends ListRecords
{
    protected static string $resource = RFQResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
