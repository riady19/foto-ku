<?php

namespace App\Filament\PewartaFoto\Resources\Artikels;

use App\Filament\PewartaFoto\Resources\Artikels\Pages\CreateArtikel;
use App\Filament\PewartaFoto\Resources\Artikels\Pages\EditArtikel;
use App\Filament\PewartaFoto\Resources\Artikels\Pages\ListArtikels;
use App\Filament\PewartaFoto\Resources\Artikels\Pages\ViewArtikel;
use App\Filament\PewartaFoto\Resources\Artikels\Schemas\ArtikelForm;
use App\Filament\PewartaFoto\Resources\Artikels\Schemas\ArtikelInfolist;
use App\Filament\PewartaFoto\Resources\Artikels\Tables\ArtikelsTable;
use App\Models\Artikel;
use BackedEnum;
use UnitEnum ;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static string | UnitEnum | null $navigationGroup = 'Foto Management';

    protected static ?string $navigationLabel = 'New Foto';




    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookOpen;

    public static function form(Schema $schema): Schema
    {
        return ArtikelForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ArtikelInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArtikelsTable::configure($table);
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
            'index' => ListArtikels::route('/'),
            'create' => CreateArtikel::route('/create'),
            'view' => ViewArtikel::route('/{record}'),
            'edit' => EditArtikel::route('/{record}/edit'),
        ];
    }
}
