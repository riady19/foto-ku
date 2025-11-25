<?php

namespace App\Filament\Resources\Catagories\Pages;

use App\Filament\Resources\Catagories\CatagoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCatagories extends ListRecords
{
    protected static string $resource = CatagoryResource::class;

    protected ?string $heading = 'Add Catagory';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
