<?php

namespace App\Filament\Resources\Catagories\Pages;

use App\Filament\Resources\Catagories\CatagoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCatagory extends ViewRecord
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
