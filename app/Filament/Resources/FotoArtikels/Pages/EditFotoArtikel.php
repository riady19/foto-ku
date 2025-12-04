<?php

namespace App\Filament\Resources\FotoArtikels\Pages;

use App\Filament\Resources\FotoArtikels\FotoArtikelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFotoArtikel extends EditRecord
{
    protected static string $resource = FotoArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
