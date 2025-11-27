<?php

namespace App\Filament\Resources\Catagories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CatagoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Card::make()->schema([
                TextInput::make('nama')
                    ->label('Nama Catagory')
                    ->required(),
                 FileUpload::make('icon')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('image')
                    ->visibility('public')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                    // ->columnSpanFull(),
            ])->columns(1);


    }
}
