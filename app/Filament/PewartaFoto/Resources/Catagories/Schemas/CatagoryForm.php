<?php

namespace App\Filament\PewartaFoto\Resources\Catagories\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Set;

class CatagoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                     ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Nama Catagory')
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
