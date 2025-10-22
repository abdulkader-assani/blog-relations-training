<?php

namespace App\Filament\Admin\Resources\Reactions;

use App\Filament\Admin\Resources\Reactions\Pages\CreateReaction;
use App\Filament\Admin\Resources\Reactions\Pages\EditReaction;
use App\Filament\Admin\Resources\Reactions\Pages\ListReactions;
use App\Filament\Admin\Resources\Reactions\Schemas\ReactionForm;
use App\Filament\Admin\Resources\Reactions\Tables\ReactionsTable;
use App\Models\Reaction;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReactionResource extends Resource
{
    protected static ?string $model = Reaction::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReactionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReactionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReactions::route('/'),
            'create' => CreateReaction::route('/create'),
            'edit' => EditReaction::route('/{record}/edit'),
        ];
    }
}
