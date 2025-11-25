<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Pages;

use App\Filament\PewartaFoto\Resources\Artikels\ArtikelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListArtikels extends ListRecords
{
    protected static string $resource = ArtikelResource::class;

    protected ?string $heading = 'Add New Foto';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
