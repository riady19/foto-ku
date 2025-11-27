<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Schemas;

use App\Models\Author;
use App\Models\Catagory;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Components\Utilities\Set;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                      ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                     ->imageEditor()
                    ->disk('public')
                    ->directory('image')
                    ->visibility('public')
                    ->columnSpanFull(),

                 MarkdownEditor::make('content')
                    ->columnSpanFull()
                    ->default(null),
                Select::make('catagory_id')
                     ->options(Catagory::query()->pluck('nama', 'id'))
                    ->default(null),
                Select::make('author_id')
                   ->options(Author::query()->pluck('name', 'id'))
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
