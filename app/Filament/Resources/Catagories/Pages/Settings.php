<?php

namespace App\Filament\Resources\Catagories\Pages;

use App\Filament\Resources\Catagories\CatagoryResource;
use Filament\Resources\Pages\Page;

class Settings extends Page
{
    protected static string $resource = CatagoryResource::class;
    protected string $view = 'filament.resources.catagories.pages.settings';
    protected static ?string $navigationLabel = 'Catagory Settings';

}
