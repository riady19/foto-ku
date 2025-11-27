<?php

namespace App\Filament\Resources\Artikels\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Illuminate\Foundation\Auth\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;

class ArtikelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                //  TextColumn::make('slug')
                //       ->searchable(),
                ImageColumn::make('image')
                  ->disk('public'),
                TextColumn::make('content')
                     ->limit(60)
                    ->searchable(),
                 TextColumn::make('catagory.nama')
                    ->listWithLineBreaks()
                    ->label('Catagory')
                    ->searchable(),
                TextColumn::make('author.name')
                     ->listWithLineBreaks()
                    ->label('Author')
                    ->searchable(),
                TextColumn::make('is_tranding')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'no' => 'warning',
                        'yes' => 'success',
                    }),
              TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'draft' => 'warning',
                    'publish' => 'success',
                }),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
