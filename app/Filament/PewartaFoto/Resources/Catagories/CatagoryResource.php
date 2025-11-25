<?php

namespace App\Filament\PewartaFoto\Resources\Catagories;

use App\Filament\PewartaFoto\Resources\Catagories\Pages\CreateCatagory;
use App\Filament\PewartaFoto\Resources\Catagories\Pages\EditCatagory;
use App\Filament\PewartaFoto\Resources\Catagories\Pages\ListCatagories;
use App\Filament\PewartaFoto\Resources\Catagories\Pages\ViewCatagory;
use App\Filament\PewartaFoto\Resources\Catagories\Schemas\CatagoryForm;
use App\Filament\PewartaFoto\Resources\Catagories\Schemas\CatagoryInfolist;
use App\Filament\PewartaFoto\Resources\Catagories\Tables\CatagoriesTable;
use App\Models\Catagory;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CatagoryResource extends Resource
{

    protected static string | UnitEnum | null $navigationGroup = 'Foto Management';

    protected static ?string $navigationLabel = 'Catagory';
    protected static ?string $model = Catagory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CatagoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CatagoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CatagoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCatagories::route('/'),
            'create' => CreateCatagory::route('/create'),
            'view' => ViewCatagory::route('/{record}'),
            'edit' => EditCatagory::route('/{record}/edit'),
        ];
    }
}
