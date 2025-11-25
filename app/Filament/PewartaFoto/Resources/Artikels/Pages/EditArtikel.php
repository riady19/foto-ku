<?php

namespace App\Filament\PewartaFoto\Resources\Artikels\Pages;

use App\Filament\PewartaFoto\Resources\Artikels\ArtikelResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditArtikel extends EditRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
