<?php

namespace App\Filament\Resources\Authors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\Layout\Stack;

class AuthorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //  Stack::make([
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
            ])->columns(1);
                //  ]);
        //     ->contentGrid([
        //     'md' => 2,
        //     'xl' => 3,
        // ]);
    }
}
