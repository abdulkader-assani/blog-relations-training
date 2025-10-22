<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use App\Models\City;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                
                Select::make('city_id')
                    ->label('City')
                    ->relationship('city', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
            ]);
    }
}
