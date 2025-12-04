<?php

namespace App\Filament\Resources\FotoArtikels\Pages;

use App\Filament\Resources\FotoArtikels\FotoArtikelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFotoArtikels extends ListRecords
{
    protected static string $resource = FotoArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
