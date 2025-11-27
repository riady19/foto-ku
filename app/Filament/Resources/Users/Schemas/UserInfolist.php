<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Support\Enums\TextSize;
use Filament\Infolists\Components\TextEntry;
use SebastianBergmann\CodeCoverage\Test\TestSize\Large;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->size(TextSize::Large)
                    ->color('primary'),
                TextEntry::make('email')
                    ->label('Email address')
                    ->size(TextSize::Large)
                    ->color('primary'),
                TextEntry::make('email_verified_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->size(TextSize::Large)
                    ->color('primary')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->size(TextSize::Large)
                    ->color('primary')
                    ->dateTime()
                    ->placeholder('-'),
            ])->columns(1);
    }
}
