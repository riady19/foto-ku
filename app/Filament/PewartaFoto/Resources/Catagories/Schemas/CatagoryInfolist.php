<?php

namespace App\Filament\PewartaFoto\Resources\Catagories\Schemas;

use Faker\Core\Color;
use Filament\Forms\Components\RichEditor\TextColor;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Support\Enums\Size;
use Filament\Support\Enums\TextSize;

class CatagoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama')
                ->Size(TextSize::Large)
                ->color('primary'),
                TextEntry::make('slug')
                ->Size(TextSize::Large)
                ->color('primary'),
                ImageEntry::make('icon')
                 ->disk('public')
                ->circular(),
                TextEntry::make('created_at')
                    ->Size(TextSize::Large)
                    ->color('primary')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->Size(TextSize::Large)
                     ->color('primary')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
