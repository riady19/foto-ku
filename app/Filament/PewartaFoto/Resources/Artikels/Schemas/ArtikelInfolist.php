<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ArtikelInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('slug'),
                ImageEntry::make('image')
                 ->disk('public')
                    ->placeholder('-'),
                TextEntry::make('content')
                    ->placeholder('-'),
                TextEntry::make('catagory.nama')
                     ->listWithLineBreaks()
                    ->label('Catagory')
                    ->badge()
                    ->placeholder('-'),
                TextEntry::make('author.name')
                     ->listWithLineBreaks()
                    ->label('Author')
                    ->badge()
                    ->placeholder('-'),
                TextEntry::make('is_tranding')
                    ->badge(),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
