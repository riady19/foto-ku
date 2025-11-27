<?php

namespace App\Filament\PewartaFoto\Resources\Authors\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Enums\TextSize;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class AuthorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama Photographer')
                    ->Size(TextSize::Large)
                    ->color('primary'),
                TextEntry::make('occupation')
                    ->Size(TextSize::Large)
                    ->color('primary')
                    ->placeholder('-'),
                ImageEntry::make('avatar')
                    ->disk('public')
                    ->circular()
                    ->placeholder('-'),
                TextEntry::make('slug')
                    ->Size(TextSize::Large)
                    ->color('primary'),
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
