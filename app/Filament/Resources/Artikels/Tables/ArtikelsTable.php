<?php

namespace App\Filament\Resources\Artikels\Tables;

use Dom\Text;
use App\Models\Artikel;
use Filament\Tables\Table;
use Livewire\Attributes\Title;
use Filament\Actions\BulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use League\Flysystem\Visibility;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ExportAction;
use Psy\VersionUpdater\Downloader;
use Filament\Support\Icons\Heroicon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Toggle;
use Filament\Actions\DeleteBulkAction;
use Filament\Schemas\Components\Image;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Actions\Imports\Models\Import;
use Psy\VersionUpdater\Downloader\FileDownloader;
use Filament\Actions\Exports\Http\Controllers\DownloadExport;

class ArtikelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                     ->limit(20)
                    ->searchable(),
                 TextColumn::make('slug')
                  ->limit(20)
                      ->searchable(),
                ImageColumn::make('image')
                     ->disk('public')
                    ->visibility('public')
                  ->size(60),
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
                    SelectColumn::make('is_tranding')
                     ->options(['yes' => 'yes', 'no' => 'no'])
                     ->default('no'),

                // TextColumn::make('is_tranding')
                //     ->badge()
                //     ->color(fn (string $state): string => match ($state) {
                //         'no' => 'warning',
                //         'yes' => 'info',
                //     }),
              TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'draft' => 'danger',
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
                ExportAction::make()
                ->label('Downloads')
                ->exporter(Artikel::class)
                ->fileDisk('public'),

            //
                ]),
                ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    // BulkAction::make('download')->button()->action(fn(Artikel $record)=>'id'),
                    // ->url(fn(Artikel $record)=> route('download.image', $record))
                    // ->openUrlInNewTab(),
                    //  ->icon('heroicon-o-download'),
                // ->color('info')
                //
                // ->url(fn(Artikel $record)=> route('download.image', $record))
                // ->openUrlInNewTab(),
                // ->url(fn(Artikel $record)=> route('download.image', $record))
                // ->openUrlNewTab(),
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
