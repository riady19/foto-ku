<?php

namespace App\Filament\Resources\Artikels\Schemas;

use App\Models\Author;
use App\Models\Catagory;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MarkdownEditor;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('image')
                     ->image()
                    ->imageEditor()
                    ->disk('public')
    ->directory('image')
    ->visibility('public'),
                MarkdownEditor::make('content')
                ->label('content')
                 ->columnSpanFull()
                   ->required(),

                Select::make('catagory_id')
                    ->label('Catagory')
                    ->options(Catagory::query()->pluck('nama', 'id'))
                    ->default(null),
               Select::make('author_id')
                    ->label('Author')
                    ->options(Author::query()->pluck('name', 'id'))
                    ->default(null),
                Select::make('is_tranding')
                    ->options(['Yes' => 'yes', 'no' => 'no'])
                    ->default('no')
                    ->required(),
                    Select::make('status')
                    ->options(['publish' => 'publish', 'draft' => 'draft'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
