<?php

namespace App\Filament\PewartaFoto\Resources\Authors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Photographer')
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
