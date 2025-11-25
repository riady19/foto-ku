<?php

namespace App\Filament\Resources\Artikels;

use UnitEnum;
use BackedEnum;
use App\Models\Artikel;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Navigation\NavigationGroup;
use Filament\Tables\Columns\Layout\Panel;
use App\Filament\Resources\Artikels\Pages\EditArtikel;
use App\Filament\Resources\Artikels\Pages\ListArtikels;
use App\Filament\Resources\Artikels\Pages\CreateArtikel;
use App\Filament\Resources\Artikels\Schemas\ArtikelForm;
use App\Filament\Resources\Artikels\Tables\ArtikelsTable;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected ?string $heading = 'Custom Page Heading';

    protected static string | UnitEnum | null $navigationGroup = 'Foto Management';

    protected static ?string $navigationLabel = 'New Foto';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::BookOpen;

    public static function form(Schema $schema): Schema
    {
        return ArtikelForm::configure($schema);
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
            'edit' => EditArtikel::route('/{record}/edit'),
        ];
    }
}
