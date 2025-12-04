<?php

namespace App\Filament\Resources\FotoArtikels;

use App\Filament\Resources\FotoArtikels\Pages\CreateFotoArtikel;
use App\Filament\Resources\FotoArtikels\Pages\EditFotoArtikel;
use App\Filament\Resources\FotoArtikels\Pages\ListFotoArtikels;
use App\Filament\Resources\FotoArtikels\Schemas\FotoArtikelForm;
use App\Filament\Resources\FotoArtikels\Tables\FotoArtikelsTable;
use App\Models\FotoArtikel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FotoArtikelResource extends Resource
{
    protected static ?string $model = FotoArtikel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'FotoArtikel';

    public static function form(Schema $schema): Schema
    {
        return FotoArtikelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FotoArtikelsTable::configure($table);
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
            'index' => ListFotoArtikels::route('/'),
            'create' => CreateFotoArtikel::route('/create'),
            'edit' => EditFotoArtikel::route('/{record}/edit'),
        ];
    }
}
