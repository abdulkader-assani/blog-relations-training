<?php

namespace App\Filament\Admin\Resources\Reactions\Pages;

use App\Filament\Admin\Resources\Reactions\ReactionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateReaction extends CreateRecord
{
    protected static string $resource = ReactionResource::class;

    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('index');
    // }
}
