<?php

namespace App\Filament\PewartaFoto\Resources\Catagories\Pages;

use App\Filament\PewartaFoto\Resources\Catagories\CatagoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCatagories extends ListRecords
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
