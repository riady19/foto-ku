<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('occupation')
                    ->default(null),
               FileUpload::make('avatar')
                    ->image()
                    ->imageEditor()
                     ->avatar()
                     ->disk('public')
                        ->directory('image')
                        ->visibility('public')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
            ]);
    }
}
