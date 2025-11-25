<?php

namespace App\Filament\PewartaFoto\Resources\Authors\Pages;

use App\Filament\PewartaFoto\Resources\Authors\AuthorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAuthor extends ViewRecord
{
    protected static string $resource = AuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
