<?php

namespace App\Filament\PewartaFoto\Resources\Catagories\Pages;

use App\Filament\PewartaFoto\Resources\Catagories\CatagoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCatagory extends EditRecord
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
