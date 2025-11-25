<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Pages;

use App\Filament\PewartaFoto\Resources\Artikels\ArtikelResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewArtikel extends ViewRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
