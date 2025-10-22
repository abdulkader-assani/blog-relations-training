<?php

namespace App\Filament\Admin\Resources\Cities\Pages;

use App\Filament\Admin\Resources\Cities\CityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCities extends ManageRecords
{
    protected static string $resource = CityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
