<?php

namespace App\Filament\Admin\Resources\Posts\Schemas;

use App\Filament\Admin\Resources\Categories\Tables\CategoriesTable;
use App\Filament\Admin\Resources\Tags\Tables\TagsTable;
use App\Models\Category;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ModalTableSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('text')
                    ->label('Content')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                Select::make('user_id')
                    ->label('Author')
                    ->relationship('user', 'name')
                    ->required(),

                ModalTableSelect::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'title')
                    ->tableConfiguration(CategoriesTable::class)
                    ->required(),

                ModalTableSelect::make('tag_id')
                    ->label('Tag')
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->tableConfiguration(TagsTable::class)
                    ->required(),
            ]);
    }
}
