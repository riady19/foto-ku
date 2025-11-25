<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

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
                    ->disk('public')
                    ->directory('image')
                    ->visibility('public')
                     ->imageEditor(),
                RichEditor::make('content')
                 ->columnSpanFull()
                    ->default(null),
                TextInput::make('catagory_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('author_id')
                    ->numeric()
                    ->default(null),
                Select::make('is_tranding')
                    ->options(['yes' => 'Yes', 'no' => 'No'])
                    ->default('no')
                    ->required(),
                Select::make('status')
                    ->options(['publish' => 'Publish', 'draft' => 'Draft'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
