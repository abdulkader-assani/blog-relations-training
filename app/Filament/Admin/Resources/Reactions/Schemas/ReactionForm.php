<?php

namespace App\Filament\Admin\Resources\Reactions\Schemas;

use App\Enum\StatusEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use function Laravel\Prompts\textarea;

class ReactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->unique()
                    ->rule('string'),
                // TextInput::make('price')
                //     ->label('Price')
                //     ->required()
                //     ->prefix('$')
                //     ->rule('numeric'),
                Select::make('status')
                    ->options(StatusEnum::class)
                    ->label('Status')
                    ->required()

            ]);
    }
}
