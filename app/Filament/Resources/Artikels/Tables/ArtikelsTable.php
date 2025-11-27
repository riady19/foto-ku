<?php

namespace App\Filament\Resources\Artikels\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Support\Icons\Heroicon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use League\Flysystem\Visibility;
use Psy\VersionUpdater\Downloader;

class ArtikelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                 TextColumn::make('slug')
                      ->searchable(),
                ImageColumn::make('image')
                  ->disk('public')
                  ->Visibility('image'),
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
    // public function delete() {
    //     if($this->public){
    //         Storage::delele($this->public);
    //     }
    //     parent::delete();
    // }

}
