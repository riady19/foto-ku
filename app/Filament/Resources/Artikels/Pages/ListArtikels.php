<?php

namespace App\Filament\Resources\Artikels\Pages;

use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Support\Icons\Heroicon;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Artikels\ArtikelResource;
use App\Filament\Resources\Artikels\Tables\ArtikelsTable;

class ListArtikels extends ListRecords
{
    protected static string $resource = ArtikelResource::class;
    protected ?string $heading = 'Add New Foto';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            // ArtikelsTable::make('image'),
            // AdvancedFileUpload::make('image')
                // ->downloadAction(function (Action $action) {
                //     return $action
                //     ->label('Unduh File')
                //     ->icon(Heroicon::OutlinedArrowDownTray);
                // })
            ];
    }
}
