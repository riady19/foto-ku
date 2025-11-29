<?php

namespace App\Filament\Resources\Authors\Tables;

use Dom\Text;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;

class AuthorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 Stack::make([
                TextColumn::make('name')
                    ->label('Nama Photographer')
                    ->size(TextSize::Large)
                    ->color('primary')
                    ->searchable(),
                TextColumn::make('occupation')
                    ->searchable(),
                ImageColumn::make('avatar')
                    ->size(80)
                    ->disk('public')
                    ->circular(),
                //  TextColumn::make('slug')
                //         ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                 ]),
            ])
            ->contentGrid([
            'md' => 2,
            'xl' => 3,
        ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
