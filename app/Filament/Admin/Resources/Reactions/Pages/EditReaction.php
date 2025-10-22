<?php

namespace App\Filament\Admin\Resources\Reactions\Pages;

use App\Filament\Admin\Resources\Reactions\ReactionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReaction extends EditRecord
{
    protected static string $resource = ReactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
