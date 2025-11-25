<?php

namespace App\Filament\Resources\Catagories\Pages;

use App\Filament\Resources\Catagories\CatagoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCatagory extends EditRecord
{
    protected static string $resource = CatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
