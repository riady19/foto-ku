<?php

namespace App\Filament\PewartaFoto\Resources\Catagories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CatagoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('icon')
                    ->image()
                    ->imageEditor()
                     ->avatar()
                    ->disk('public')
                    ->directory('image')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
