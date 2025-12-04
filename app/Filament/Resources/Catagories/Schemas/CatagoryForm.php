<?php

namespace App\Filament\Resources\Catagories\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;

class CatagoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Card::make()->schema([
                Section::make()
                ->schema([
                    TextInput::make('nama')
                    ->label('Nama Catagory')
                      ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
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
                ])

                ]);


    }
}
